<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExportCsvController;

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
    return view('welcome');
});

Route::get('/export', [ExportCsvController::class, 'index']);
Route::post('/export', [ExportCsvController::class, 'export'])->name('csv.export');
