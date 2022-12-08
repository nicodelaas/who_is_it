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
                print "Null if domain available";
                exit;
            }

            $textArray = $info->getResponse()->text;
            $regex = '/\r\n|: /im';
            $textArray = preg_split($regex, $textArray);
            for($i = 0; $i < 50; $i + 2)
            {
                $text = [
                    $textArray[$i] => $textArray[$i + 1]
                ];
            }
            dd($text);


            return $formatted_data;
        } catch (ConnectionException $e) {
            print "Disconnect or connection timeout";
        } catch (ServerMismatchException $e) {
            dd($e);
            print "TLD server (.com for google.com) not found in current server hosts";
        } catch (WhoisException $e) {
            print "Whois server responded with error '{$e->getMessage()}'";
        }

//        $dns = new Dns();
//
//        try {
//            $records = dd($dns->getRecords($domain));
//            return $records;
//        } catch(CouldNotFetchDns $e) {
//            return ["errors" => $e];
//        }
    }

    function getServers()
    {
        $dns = new Dns();
    }
}
