<?php

declare(strict_types=1);

use App\Http\Controllers\SubscriberController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/subscribe', 'subscribe.form');
Route::post('/subscribers', [SubscriberController::class, 'storeWeb']);
