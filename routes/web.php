<?php

use Illuminate\Support\Facades\Route;

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
    return view('eczite-welcome' ,['title' => 'Home']);
});
Auth::routes();
Route::get('/test', function () {
    return view('eczite.dashboard' ,['title' => 'Home','user' => \App\Models\User::all()->first()]);
});
Route::get('register', [\App\Http\Controllers\Auth\RegistrationController::class,'index'])->name('register');
Route::post('register/user',[\App\Http\Controllers\Auth\RegistrationController::class ,'registerUsers'])->name('register.user');
Route::post('register/driver',[\App\Http\Controllers\Auth\RegistrationController::class ,'registerDriver'])->name('register.driver');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard' , ['slug' => auth()->user()->slug]);
})->name('dashboard');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
