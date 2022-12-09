<?php

use App\Http\Controllers\testAPI;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

