<?php

use App\Http\Controllers\DnsController;
use App\Http\Controllers\testAPI;
use Illuminate\Support\Facades\Route;


Route::get('/', [DnsController::class, 'getDNS']);
