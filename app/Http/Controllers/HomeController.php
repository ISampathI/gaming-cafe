<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Game;
use App\Models\Reservation;
use App\Models\Computer;
use DB;

class HomeController extends Controller
{
    public function view(){
        $data = DB::select("SELECT (SELECT COUNT(*) FROM users) as users, (SELECT COUNT(*) FROM games) as games, (SELECT COUNT(*) FROM reservations) as reservations, (SELECT COUNT(*) FROM computers) as computers");
        
        return $data;
    }
}
