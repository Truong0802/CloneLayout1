<?php

use App\Http\Controllers\auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
Route::prefix('server')->group(function() {
    Route::prefix('auth')->group(function() {
        Route::post('/register',[auth::class,'register']);
    });
});
