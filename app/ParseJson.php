<?php

namespace App;

use GuzzleHttp\Client;

class ParseJson implements ParserInterface
{
    protected $url = 'https://www.cbr-xml-daily.ru/daily_json.js';
    protected $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    public function response()
    {
        $request = $this->client->get($this->url);

        if($request->getStatusCode() != 200){
            return false;
        };

        $response = json_decode($request->getBody());
        foreach($response->Valute as $valute){
            if($valute->CharCode == 'EUR'){
                return (float) $valute->Value;
            };
        }

        return false;
    }
}