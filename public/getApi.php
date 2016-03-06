<?php
/**
 * Created by PhpStorm.
 * User: Cosmin
 * Date: 2/28/2016
 * Time: 4:07 PM
 */

class getApi
{
    public function getData($vars) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://phpadvanced.local/api/index.php");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $vars);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $headers = array();
        $headers[] = 'Auth: abc123';
        $headers[] = 'Content-type: json';
        $headers[] = 'ReturnAll: 1';

        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $server_output = curl_exec($ch);

        curl_close($ch);

        print $server_output;

    }
}

$getApi = new getApi();
$getApi->getData(null);