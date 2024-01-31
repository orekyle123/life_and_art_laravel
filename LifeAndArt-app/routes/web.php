<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManeger;
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
})->name('home');


Route::get('/login', [AuthManeger:: class, 'login'])->name('login');
Route::post('/login', [AuthManeger:: class, 'loginPost'])->name('login.post');

Route::get('/register', [AuthManeger:: class, 'register'])->name('register');
Route::post('/register', [AuthManeger:: class, 'registerPost'])->name('register.post');

Route::get('/logout', [AuthManeger:: class, 'logout'])->name('logout');

Route::group(['middleware' => 'auth'], function (){
    
    Route::get('/profile', function(){
        
        return"Hi";
    });
    
});

