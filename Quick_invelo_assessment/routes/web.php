<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FieldController;
use App\Http\Controllers\RecordController;
use App\Models\Record;
use App\Models\Field;
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



Route::resource('/', FieldController::class);
Route::resource('/records', RecordController::class);
Route::get('/records-pivot', [ RecordController::class, 'getRecordFields' ]);
Route::get('/all-fields-with-pivot', [ RecordController::class, 'getAllFields_and_allRelatedPivotRecords' ]);
