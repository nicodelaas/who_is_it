<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Dns\Dns;

use Iodev\Whois\Factory;
use Iodev\Whois\Exceptions\ConnectionException;
use Iodev\Whois\Exceptions\ServerMismatchException;
use Iodev\Whois\Exceptions\WhoisException;
use Spatie\Dns\Exceptions\CouldNotFetchDns;

class DnsController extends Controller
{
    function getDNS(string $domain)
    {
        try {
            $whois = Factory::get()->createWhois();
            $info = dd($whois->loadDomainInfo($domain));
            if (!$info) {
                return "This domain is available";
                exit;
            }

            $extraData = $info->getExtra()["groups"][0];

            return $extraData;

        } catch (ConnectionException $e) {
            return "Disconnect or connection timeout";
        } catch (ServerMismatchException $e) {
            return "TLD server (.com for google.com) not found in current server hosts";
        } catch (WhoisException $e) {
            return "Whois server responded with error '{$e->getMessage()}'";
        }
    }

    function getRecords(string $domain, string $type = '*')
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
