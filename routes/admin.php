<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::middleware(['admin'])->prefix('admin')->group(function () {
    Route::get('dashboard', function () {
        return view('admin.dashboard.dashboard');
    });

    Route::resource('slider',App\Http\Controllers\admin\SliderController::class);

});