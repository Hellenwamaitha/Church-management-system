<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\BelieverController;
use  App\Http\Controllers\BelieversController;

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
    return view('layout');
});
// Route for displaying the create form
Route::get('/believers/create', [BelieversController::class, 'create'])->name('believers.create');

// Route for storing the new believer data
Route::post('/believers', [BelieversController::class, 'store'])->name('believers.store');