<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Reservation;
use App\Models\Package;
use Yajra\Datatables\Datatables;

class ReservationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {

        $uid  = Auth::user()->id;
        $name = (Auth::user()->first_name) . " " . (Auth::user()->last_name);

        $reservation = new Reservation();

        $reservation->user_id = $uid;
        $reservation->user_name = $name;
        $reservation->date = $request->date;
        $reservation->time = $request->time;
        $reservation->computer_id = $request->pc;
        $reservation->package_id = $request->packid;
        $reservation->start_time = $request->start_time;

        $reservation->save();

        return response()->json(['status' => 'ok']);
    }

    public function anydata()
    {

        return Datatables::of(Reservation::query())->make(true);
    }
    public function userdata()
    {

        return Datatables::of(Reservation::query()->where("user_id", Auth::user()->id))->make(true);
    }

    public function respkgdata(Request $request)
    {
        $date = $request->date;
        $packid = $request->packid;
        $pcid = $request->pcid;

        $data["reservations"] = Reservation::select("start_time", "package_id")->orderBy("start_time")->where([["date", $date],["computer_id", $pcid]])->get();
        foreach ($data["reservations"] as $res) {
            $res["package_time"] = (Package::select("package_time")->where("package_id", $res["package_id"])->first())["package_time"];
        }

        $resdata["package"] =  Package::select("package_id", "package_name", "package_time", "package_price")->where("package_id", $packid)->get();

        if (count($data["reservations"]) != 0) {
            $pkgTime = $resdata["package"][0]->package_time;
            $rescounter = 0;
            $counter = 8;
            $resvlist = $data["reservations"];
            $resvlilen = count($data["reservations"]);
            $reshours = [];
            $availableTimes = [];

            foreach ($resvlist as $ri) {
                $st = $ri["start_time"];
                for ($rri = 0; $ri["package_time"] > $rri; $rri++) {
                    array_push($reshours, $st + $rri);
                }
            }
            $data["reshours"] = $reshours;

            while ($counter < 20) {
                $st = $resvlist[$rescounter]["start_time"];
                $pt = $resvlist[$rescounter]["package_time"];
                if ($counter != $st) {
                    $hash = false;
                    for ($rri = 0; $pkgTime > $rri; $rri++) {
                        if (in_array($counter + $rri, $reshours)) {
                            $hash = true;
                            break;
                        }
                    }
                    if (!$hash && $counter + $pkgTime <= 20) {
                        array_push($availableTimes, $counter);
                        $counter ++;//$counter += $pkgTime;
                    } else {
                        $counter++;
                    }
                } else {
                    if ($resvlilen - 1 > $rescounter) {
                        $rescounter++;
                    }
                    $counter += $pt;//$counter += $pt;
                }
            }
            $resdata["availableTimes"] = $availableTimes;
            $resdata["isFullDayAvailable"] = false;
        } else {
            $resdata["availableTimes"] = [];
            $resdata["isFullDayAvailable"] = true;
        }


        return $resdata;
    }
    public function viewPopuler(){
        $computers = Reservation::Select("computer_id", Reservation::raw('count(*) as total'))->groupBy("computer_id")->orderBy("total", "desc")->take(6)->get();

        return $computers;
    }
    public function getEventDetails(){
        $data["reservation"] = Reservation::orderBy('date')->latest()->select("id", "date","time", "computer_id")->where("user_id", Auth::user()->id)->take(10)->get();
        $data["regdate"] = Auth::user()->created_at;

        return $data;
    }
}
