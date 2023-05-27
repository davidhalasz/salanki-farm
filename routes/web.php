<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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

Route::get('/', function () {
    return view('welcome');
})->name('guest.index');

Route::get('/farm-lakoi', function () {
    return view('farm-lakoi');
})->name('guest.farm-lakoi');

Route::get('/araink', [Controller::class, 'arlista'])->name('guest.araink');

Route::get('/szolgaltatasok', [Controller::class, 'szolgaltatasok'])->name('guest.szolgaltatasok');

Route::get('/kapcsolat', [Controller::class, 'kapcsolat'])->name('guest.kapcsolat');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/dashboard/szolgaltatasok', function () {
        return view('dashboard.szolgaltatasok');
    })->name('dashboard.szolgaltatasok');
    Route::get('/dashboard/kapcsolat', function () {
        return view('dashboard.kapcsolat');
    })->name('dashboard.kapcsolat');
});
