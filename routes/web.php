<?php

use App\Http\Controllers\DnsController;
use App\Http\Controllers\EmailController;
use Illuminate\Support\Facades\Route;


Route::get('/', [DnsController::class , 'dnsRecords'])->name('dnsRecords');
//Route::get('/', [DnsController::class , 'dns_get_record'])->name('dns_get_record');
Route::get('/email', [EmailController::class , 'emailValidator'])->name('email');
