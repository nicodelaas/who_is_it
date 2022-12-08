<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Dns\Dns;
use Spatie\Dns\Exceptions\CouldNotFetchDns;

class testAPI extends Controller
{
    function getDNSData(string $domain)
    {
        $dns = new Dns();

        try {
            $dns->getRecords($domain);
            $records = $dns->getRecords($domain);
            return $records;
        } catch(CouldNotFetchDns $e) {
            dd($e);
            return ["errors" => $e];
        }
    }
}
