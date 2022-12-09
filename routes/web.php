<?php

use App\Http\Controllers\testAPI;
use Illuminate\Support\Facades\Route;


Route::get('/', [TestApi::class, 'getDNSData']);
