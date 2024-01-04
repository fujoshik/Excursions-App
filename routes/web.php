<?php

use App\Http\Controllers\ExcursionController;
use App\Http\Controllers\OrganizerController;
use App\Http\Controllers\TransportController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [IndexController::class, 'index']);

Route::get('/about', function() { return view('about'); });

Route::get('/excursions', [ExcursionController::class, 'getAll']);

Route::get('/organizers', [OrganizerController::class, 'getAll']);

Route::get('/transports', [TransportController::class, 'getAll']);
