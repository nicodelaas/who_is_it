<?php

use App\Http\Controllers\DnsController;
use Illuminate\Support\Facades\Route;

Route::get('/' , function(){
    return view('/homepage');
});
//
//Route::get('/', [DnsController::class, 'getDNS']);
