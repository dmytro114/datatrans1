<?php

use Illuminate\Support\Facades\Route;

Route::middleware('web')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('serviceselect', function () {
            return view('custom-auth::serviceselect');
        })->name('serviceselect');
        Route::post('serviceselect', function (\Illuminate\Http\Request $request) {
            dd($request);
        })->name('serviceselect.attempt');
    });
});