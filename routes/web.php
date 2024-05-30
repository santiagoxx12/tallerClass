<?php

use App\Http\Controllers\TruckTruckerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view ('welcome');
});

Route::get('/camionero/asociar_camion',[TruckTruckerController::class,'asociar']);
Route::post('/camionero/asociar_camion/store',[TruckTruckerController::class,'store'])->name('truck_trucker.store');