<?php

use App\Http\Controllers\CandidateController;
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
    return view('candidates.index');
});

// applicaiton all routes
Route::get('/show', [CandidateController::class, 'index']);
Route::get('/coins', [CandidateController::class, 'getCoins']);
// Route::post('candidates-contact', [CandidateController::class, 'contact']);

// contact condidate route
Route::get('/contact/{id}', [CandidateController::class, 'contact']);
