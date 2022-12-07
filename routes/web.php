<?php

use App\Http\Controllers\DnsController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\IpController;
use Illuminate\Support\Facades\Route;


//Route::get('/', [DnsController::class , 'dnsRecords'])->name('dnsRecords');
//Route::get('/', [DnsController::class, 'getDomainIp']);
//Route::get('/', [DnsController::class, 'getIpInfo']);
//Route::get('/', [DnsController::class, 'getUserIpAddr']);
Route::get('/dns/{domain}', [DnsController::class , 'dnsRecords'])->name('dnsRecords');
Route::get('/dns', [DnsController::class , 'dnsRecords'])->name('dnsRecords');
//Route::get('/', [DnsController::class , 'dns_get_record'])->name('dns_get_record');
Route::get('/', [DnsController::class, 'getDomainSummary']);
Route::get('/email', [EmailController::class , 'emailValidator'])->name('email');
Route::get('/ip', [IpController::class, 'ipAddress'])->name('ipadress');
