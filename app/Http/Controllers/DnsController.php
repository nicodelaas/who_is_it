<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Factory;
use Symfony\Component\Console\Application;
use Spatie\Dns\Dns;

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

    public function dns_get_record(): string
    {
        $dnsRecords = dns_get_record("freave.nl", DNS_ANY);
        $sentence = implode(' ', $dnsRecords);
        $escaped = htmlspecialchars($sentence);
        return view('welcome')->with(['escaped' => $escaped]);
    }

    public function getUserIpAddr()
    {
        $ipaddress = '';
        if (isset($_SERVER['HTTP_CLIENT_IP']))
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        else if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        else if (isset($_SERVER['HTTP_X_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        else if (isset($_SERVER['HTTP_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        else if (isset($_SERVER['HTTP_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        else if (isset($_SERVER['REMOTE_ADDR']))
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }

    public function dnsRecords(): string
    {
        $dns = new Dns();

        $dns->getRecords('freave.nl'); // returns all available dns records
        $dns->getRecords('freave.nl', 'A'); // returns only A records
        $records = collect($dns->getRecords('freave.nl'));
        $hostNameOfFirstRecord = $records[0]->host();
        $hostNameTimeToLive = $records[0]->ttl();
        return (string)view('welcome')->with([
            'records' => $records,
            'hostNameOfFirstRecord' => $hostNameOfFirstRecord,
            'hostNameTimeToLive' => $hostNameTimeToLive]);
    }

    public function summary()
    {
        $dns = new Dns();
        $summary = $dns->getSummary('example.com');
    }
}
