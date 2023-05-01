<?php

namespace App\Http\Controllers;

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

Route::get('/', function () {
    return view('pages.home');
});

// Route::get('/roster', function () {
//     return view('pages.roster');
// });

Route::get('roster', [RosterController::class, 'roster'])->name('roster');

Route::get('/CBT', function () {
    return view('pages.CBT');
});

Route::get('/history', function () {
    return view('pages.history');
});

Route::get('prospective', [ProspectiveController::class, 'prospective'])->name('prospective');
