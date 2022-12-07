<?php

use App\Http\Controllers\DnsController;
use App\Http\Controllers\EmailController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [DnsController::class , 'getSummary'])->name('getSummary');
//Route::get('/', [DnsController::class , 'dns_get_record'])->name('dns_get_record');

Route::get('/email', [EmailController::class , 'emailValidator'])->name('email');
