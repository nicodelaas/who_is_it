<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Factory;
use Illuminate\View\View;
use Symfony\Component\Console\Application;

class DnsController
{
    public function showMx(): Factory|string|Application
    {
        $testDomain = 'freave.nl';
        if (dns_get_mx($testDomain, $mx_details)) {
            foreach ($mx_details as $key => $value) {
                return "$key => $value <br>";
            }
        }

        return view('/welcome')->with([
            'mx_details' => $mx_details,
            'testDomain' => $testDomain]);
    }
    public function dns_get_record()
    {
        $dnsRecord = dns_get_record("www.freave.nl", DNS_MX);
        return view('welcome')->with(['dnsRecord' => $dnsRecord]);
    }

    public function getUserIpAddr(){
        $ipaddress = '';
        if (isset($_SERVER['HTTP_CLIENT_IP']))
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_X_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        else if(isset($_SERVER['REMOTE_ADDR']))
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }
}
