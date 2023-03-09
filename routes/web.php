<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('registration');
});

Route::get('/user', function () {
    return view('userpanel');
})->middleware('auth');

Route::get('/admin', function () {
    return view('adminpanel');
})->middleware(['auth',"isAdmin"]);

Route::post('user/update', [UserController::class, 'update']);
Route::post('user/updatep', [UserController::class, 'updatep']);
Route::get('user/viewone', [UserController::class, 'viewOne']);

Route::post('registration/store', [UserController::class, 'store']);
Route::post('registration/dologin', [UserController::class, 'dologin']);
Route::get('registration/anydata', [UserController::class, 'anydata'])->middleware(['auth',"isAdmin"]);

Route::post('reservation/store', [ReservationController::class, 'store']);
Route::get('reservation/anydata', [ReservationController::class, 'anydata']);
Route::get('reservation/userdata', [ReservationController::class, 'userdata']);
Route::get('reservation/respkgdata', [ReservationController::class, 'respkgdata']);
Route::get('reservation/viewpopuler', [ReservationController::class, 'viewPopuler']);
Route::get('reservation/geteventdetails', [ReservationController::class, 'getEventDetails']);

Route::post('game/store', [GameController::class, 'store']);
Route::post('game/update', [GameController::class, 'update']);
Route::post('game/delete', [GameController::class, 'delete']);
Route::get('game/view', [GameController::class, 'view']);
Route::get('game/viewone', [GameController::class, 'viewone']);
Route::get('game/viewhimg', [GameController::class, 'viewhimg']);
Route::get('game/anydata', [GameController::class, 'anydata']);
Route::get('game/partofdata', [GameController::class, 'partofdata']);
Route::get('game/getlatest', [GameController::class, 'getLatest']);

Route::post('computer/store', [ComputerController::class, 'store']);
Route::post('computer/update', [ComputerController::class, 'update']);
Route::get('computer/view', [ComputerController::class, 'view']);
Route::get('computer/viewhGame', [ComputerController::class, 'viewhGame']);
Route::get('computer/viewone', [ComputerController::class, 'viewone']);
Route::get('computer/viewoneimg', [ComputerController::class, 'viewoneimg']);
Route::get('computer/delete', [ComputerController::class, 'delete']);

Route::post('package/store', [PackageController::class, 'store']);
Route::post('package/update', [PackageController::class, 'update']);
Route::post('package/delete', [PackageController::class, 'delete']);
Route::get('package/viewall', [PackageController::class, 'viewall']);
Route::get('package/viewone', [PackageController::class, 'viewone']);

Route::get('/logout', [LogoutController::class, 'perform'])->middleware('auth')->name('logout');

Route::get('home/view', [HomeController::class, 'view']);