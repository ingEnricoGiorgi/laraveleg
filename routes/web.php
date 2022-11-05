<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlightController;
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
    return view('welcome');
});

Route::get('/flight', [FlightController::class, 'index']);
Route::get('/flightinsert/{status}', function ($status) {
    return 'Flight '.$status;
});
Route::get('/flightinsertstore/{status}', [FlightController::class, 'store']);
Route::get('/flightinsertstore/{status}', [FlightController::class, 'store'])->name('status');
