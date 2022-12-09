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
    function getDNSData(string $domain)
    {
        try {
            $whois = Factory::get()->createWhois();
            $info = $whois->loadDomainInfo($domain);
            if (!$info) {
                return "This domain is available";
                exit;
            }

            $extraData = $info->getExtra()["groups"][0];

            return $extraData;


            return dd($info);
        } catch (ConnectionException $e) {
            return "Disconnect or connection timeout";
        } catch (ServerMismatchException $e) {
            return "TLD server (.com for google.com) not found in current server hosts";
        } catch (WhoisException $e) {
            return "Whois server responded with error '{$e->getMessage()}'";
        }
    }

    function getServers()
    {
        $dns = new Dns();
    }
}
