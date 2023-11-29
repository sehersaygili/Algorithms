<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PalindromeController;
use App\Http\Controllers\RomanNumeralController;

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
    return view('convert');
});


Route::controller(RomanNumeralController::class)->group(function () {
    Route::get('/convert/{number}', [RomanNumeralController::class, 'convertToInteger']);

});