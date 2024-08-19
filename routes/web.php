<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtilityController;

Route::get('/', function () {
    return view('hello', [
        'name' => 'hoge'
    ]);
});

Route::get('/index', [UtilityController::class, 'index']);
