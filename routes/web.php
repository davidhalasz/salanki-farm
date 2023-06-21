<?php
use App\Http\Livewire\GalleryForm;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
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

Route::get('/', [Controller::class, 'fooldal'])->name('guest.index');

Route::get('/galeria', [Controller::class, 'galeria'])->name('guest.galeria');

route::get('/kepek', [Controller::class, 'kepek'])->name('guest.kepek');

Route::get('/araink', [Controller::class, 'arlista'])->name('guest.araink');

Route::get('/szolgaltatasok', [Controller::class, 'szolgaltatasok'])->name('guest.szolgaltatasok');

Route::get('/kapcsolat', [Controller::class, 'kapcsolat'])->name('guest.kapcsolat');

