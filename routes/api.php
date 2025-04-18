<?php

use App\Http\Controllers\DeviceController;
use App\Http\Controllers\SensorReadingController;
use App\Http\Controllers\CommandController;


Route::post('/devices', [DeviceController::class, 'store']);
Route::post('/devices/{device}/readings', [SensorReadingController::class, 'store']);
Route::post('/devices/{device}/commands', [CommandController::class, 'store']);
Route::get('/devices/{device}/commands/poll', [CommandController::class, 'poll']);
Route::get('/devices/commands/poll', [CommandController::class, 'pollAll']);
