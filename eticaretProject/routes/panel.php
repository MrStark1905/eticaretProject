<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\DashboardController;

Route::group(["middleware"=>["auth", "panelsetting"], "prefix"=>"panel", "as"=>"panel."], function() {

    Route::get('/', [DashboardController::class, "index"])->name("index");

    Route::get('/slider', [SliderController::class, "index"])->name("slider.index");
    Route::get('/slider/ekle', [SliderController::class, "create"])->name("slider.create");
    Route::get('/slider/{id}/edit', [SliderController::class, "edit"])->name("slider.edit");
    Route::post('/slider/store', [SliderController::class, "store"])->name("slider.store");
    Route::put('/slider/{id}/update', [SliderController::class, "update"])->name("slider.update");
    Route::delete('/slider/{id}/destroy', [SliderController::class, "destroy"])->name("slider.destroy");


});
