<?php

use App\Http\Controllers\InfoController;
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

Route::get('importExportView', 'InfoController@importExportView');
Route::get('export', 'InfoController@export')->name('export');
Route::post('import', 'InfoController@import')->name('import');
Route::get('show', 'InfoController@showDB');
