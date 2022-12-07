<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IpController
{
    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function ipAddress(Request $request)
    {
        $ip = $request->getClientIp();

        return(view('ip')->with([
            'ipAddress' => $ip,
        ]));
    }
}
