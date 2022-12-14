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
    function getDNS()
    {
        $domain = "freave.com";
        try {
            $whois = Factory::get()->createWhois();
            $info = $whois->loadDomainInfo($domain);

            if (!$info) {
                return "This domain is available";
                exit;
            }
            if (collect($info->getExtra()["groups"][0])->count() > 20)
            {
                $dnsData = collect($info->getExtra()["groups"][0]);
            } else {
                $dnsData = $info->getResponse()->text;
                $regex = '/\r\n|: /im';
                $dnsData = preg_split($regex, $dnsData);
            }

            $specificArray = array();

            foreach($dnsData as $key => $val) {
                if(str_starts_with($key, 'Billing'))
                    $specificArray[$key] = $val;
            }

            if (isset($_GET["dns"])) {
                return $dnsData . $this->getRecords($domain);
            } else {
                return $dnsData;
            }

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
            return $records;
        } catch(CouldNotFetchDns $e) {
            return ["errors" => $e];
        }
    }
}
