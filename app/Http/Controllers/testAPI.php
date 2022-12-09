<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Dns\Dns;

use Iodev\Whois\Factory;
use Iodev\Whois\Exceptions\ConnectionException;
use Iodev\Whois\Exceptions\ServerMismatchException;
use Iodev\Whois\Exceptions\WhoisException;
use Spatie\Dns\Exceptions\CouldNotFetchDns;

class testAPI extends Controller
{
    function getDNSData()
    {
        $domain = "vox.com";
        try {
            $whois = Factory::get()->createWhois();
            $info = $whois->loadDomainInfo($domain);
            if (!$info) {
                return "This domain is available";
                exit;
            }

            $extraData = $info->getExtra()["groups"][0];

        } catch (ConnectionException $e) {
            return "Disconnect or connection timeout";
        } catch (ServerMismatchException $e) {
            return "TLD server (.com for google.com) not found in current server hosts";
        } catch (WhoisException $e) {
            return "Whois server responded with error '{$e->getMessage()}'";
        }
        return view('/welcome')->with('extraData', $extraData);
    }

    function getDNSRecords(string $domain, string $type = '*')
    {
        $dns = new Dns();

        try {
            $records = $dns->getRecords($domain, $type);
            return dd($records);
        } catch(CouldNotFetchDns $e) {
            return ["errors" => $e];
        }
    }
}
