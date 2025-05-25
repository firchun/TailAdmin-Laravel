<?php


use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class, 'dashboard'])->middleware('auth');

Auth::routes();

Route::get('/home', [PagesController::class, 'dashboard'])->name('home');
Route::get('/calendar', [PagesController::class, 'calendar'])->name('calendar');
