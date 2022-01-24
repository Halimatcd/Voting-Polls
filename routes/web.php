<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PollingunitController;
use App\Http\Controllers\LgaController;
use App\Http\Controllers\PartyController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|;
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PageController::class, 'welcomePage']);
Route::get('/polling_units', [PollingunitController::class, 'getPollingUnits']);
Route::get('/lga', [LgaController::class, 'lgaList']);
Route::get('/partyList', [PartyController::class, 'partyList']);
Route::get('/scores', [PollingunitController::class, 'getPollingResults']);
Route::get('/lgaResults/{id}', [LgaController::class, 'lgaResults'])->name('lga.results');
Route::get('/createNewPu', [PollingunitController::class, 'createNewPu'])->name('new.pu');
Route::post('/newPu', [PollingunitController::class, 'newPu'])->name('new.pu');
