<?php

use App\Http\Controllers\AnthosStoreMediaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

Route::get('/anthos', function () {
    return Str::random('40');
});
Route::post('/anthos/storage', AnthosStoreMediaController::class)->name('anthos.store');

