<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/svm', function () {
    return view('dashboardSVM');
})->name('svm');

Route::get('/cnn', function () {
    return view('dashboard');
})->name('cnn');

Route::get('/', function () {
    return view('dashboard');
});

require __DIR__.'/auth.php';
