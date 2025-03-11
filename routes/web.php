<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\RegisterController;

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
    return view('web.sections.home.index');
});

Route::get('/intern', function() {
    return view('web.sections.intern.index');
})->name('intern.index');

Route::get('/user', function() {
    return view('user.sections.dashboard.index');
});

Route::post('/register/intern,', [RegisterController::class, 'intern_register'])->name('intern.register');