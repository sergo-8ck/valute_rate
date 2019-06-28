<?php

namespace App;

use GuzzleHttp\Client;

class ParseXml implements ParserInterface
{
    protected $url = 'http://www.ecb.europa.eu/stats/eurofxref/eurofxref-daily.xml';
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

        $parser = simplexml_load_string($request->getBody());

        $array = $parser->Cube->Cube->children();

        foreach($array as $valute){
            if($valute['currency'] == 'RUB'){
                return (float) $valute['rate'];
            };
        }

        return false;
    }
}