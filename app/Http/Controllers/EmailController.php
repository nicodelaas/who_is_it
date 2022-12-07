<?php

namespace App\Http\Controllers;

class EmailController
{
    public function emailValidator()
    {
        $email = 'sso@aspapmail.com';
        list($username, $domain) = explode('@', $email);

        if (checkdnsrr($domain, 'MX')) {
            $result = "verified";
        }
        else {
            $result = "failed";
        }
        return(view('email')->with([
            'result' => $result,
            'domain' => $domain,
            ]));
    }
}
