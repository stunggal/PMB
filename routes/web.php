<?php

use App\Http\Controllers\BobotController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InsertParticipantController;
use App\Http\Controllers\InsertParticopantsController;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\ParticipantsController;
use App\Http\Controllers\PeriodController;
use App\Http\Controllers\ScoreController;
use App\Models\Score;

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

Route::resource('/', DashboardController::class);
Route::resource('participants', ParticipantsController::class);
Route::resource('period', PeriodController::class);
Route::resource('insertparticipant', InsertParticipantController::class);
Route::resource('score', ScoreController::class);
Route::resource('bobot', BobotController::class);

Route::resource('participant', ParticipantController::class);
