<?php

namespace App\Http\Controllers;

use Iodev\Whois\Factory;
use Symfony\Component\Console\Application;
use Spatie\Dns\Dns;
use Stevebauman\Location\Facades\Location;

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

        return view('welcome')->with(['ipaddress' => $ipaddress]);
    }

    public function dnsRecords($domain = null): string
    {
        $dns = new Dns();

        $dns->getRecords($domain ?: 'google.com'); // returns all available dns records
        $dns->getRecords($domain ?: 'google.com', 'A'); // returns only A records
        $records = collect($dns->getRecords($domain ?: 'google.com'));
        $hostNameOfFirstRecord = $records[0]->host();
        $hostNameTimeToLive = $records[0]->ttl();
        return (string)view('welcome')->with([
            'records' => $records,
            'hostNameOfFirstRecord' => $hostNameOfFirstRecord,
            'hostNameTimeToLive' => $hostNameTimeToLive]);
    }

    public function getDomainIp()
    {
        $ip = gethostbyname('freave.nl');

        return view('welcome', compact('ip'));
    }

    public function getIpInfo()
    {
        $ip = '95.211.13.84';
        $currentUserInfo = Location::get($ip);

        return view('welcome', compact('currentUserInfo'));
    }

    public function getDomainSummary(): string
    {
        // Creating default configured client
        $whois = Factory::get()->createWhois();

        // Checking availability
        if ($whois->isDomainAvailable("google.com")) {
            print "Bingo! Domain is available! :)";
        }

        // Supports Unicode (converts to punycode)
        if ($whois->isDomainAvailable("почта.рф")) {
            print "Bingo! Domain is available! :)";
        }

        // Getting raw-text lookup
        $response = $whois->lookupDomain("freave.nl");
        $output = $response->text;
        $outputInJson = json_encode($output);

        // Getting parsed domain info
        $info = $whois->loadDomainInfo("freave.nl");
        $domainInfo = [
            'Domain created' => date("Y-m-d", $info->creationDate),
            'Domain expires' => date("Y-m-d", $info->expirationDate),
            'Domain owner' => $info->owner,
        ];
        return view('welcome')->with([
            'whois' => $whois,
            'info' => $info,
            'domainInfo' => $domainInfo,
            'response' => $response,
            'outputInJson' => $outputInJson
        ]);
    }

}
