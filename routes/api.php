<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\OvertimeController;
use App\Http\Controllers\ReferenceController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/*
|--------------------------------------------------------------------------
| Setting Routes
|--------------------------------------------------------------------------
*/

Route::resource('settings', SettingController::class)
    ->only('update');

/*
|--------------------------------------------------------------------------
| Employee Routes
|--------------------------------------------------------------------------
*/

Route::resource('employees', EmployeeController::class)
    ->only('store');

/*
|--------------------------------------------------------------------------
| Overtime Routes
|--------------------------------------------------------------------------
*/

Route::resource('overtimes', OvertimeController::class)
    ->only('store');

Route::get('overtimes-pays/calculate',[OvertimeController::class, 'calculate'])
    ->name('overtimes-pays.calculate');

/*
|--------------------------------------------------------------------------
| Reference Routes
|--------------------------------------------------------------------------
*/

Route::resource('references', ReferenceController::class)
    ->only('index');
