<?php


use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return redirect()->route('login');
})->name('welcome');

Auth::routes();

Route::get('/home', [PagesController::class, 'dashboard'])->name('home');
Route::get('/calendar', [PagesController::class, 'calendar'])->name('calendar');
Route::get('/alerts', [PagesController::class, 'alerts'])->name('alerts');
Route::get('/buttons', [PagesController::class, 'buttons'])->name('buttons');
Route::get('/chart', [PagesController::class, 'chart'])->name('chart');
Route::get('/form-elements', [PagesController::class, 'form_elements'])->name('form-elements');
Route::get('/form-layout', [PagesController::class, 'form_layout'])->name('form-layout');
Route::get('/profile', [PagesController::class, 'profile'])->name('profile');
Route::get('/settings', [PagesController::class, 'settings'])->name('settings');
Route::get('/tables', [PagesController::class, 'tables'])->name('tables');
