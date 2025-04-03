<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiController;

//Route::post('register', [ApiController::class, 'register']);
Route::post('login', [ApiController::class, 'login']);

//Route::middleware(['auth:sanctum' => ["auth:sanctum"] ], function() {
//    Route::get('rendezvous', [ApiController::class, 'rendezvous']);
//});

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
