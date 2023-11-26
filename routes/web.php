<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MekaarController;

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
Route::get('/', [MekaarController::class, 'index'])->name('index.post');
Route::get('/import', [MekaarController::class, 'import'])->name('index.import');
Route::get('/truncate', [MekaarController::class, 'truncate'])->name('index.truncate');

Route::post('/import-excel', [MekaarController::class, 'importExcel'])->name('import-excel');