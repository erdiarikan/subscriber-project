<?php

declare(strict_types=1);

use App\Http\Controllers\SubscriberController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('subscribers', SubscriberController::class)->only(['index', 'store']);
