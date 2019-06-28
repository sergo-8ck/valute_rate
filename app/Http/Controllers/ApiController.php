<?php

namespace App\Http\Controllers;

use App\ParseJson;
use App\ParseXml;
use App\Valute;

class ApiController extends Controller
{
    public function index()
    {
        $source1 = new ParseJson();
        $source2 = new ParseXml();

        $rate = (new Valute($source1, $source2))->getRate();

        return response()->json($rate);
    }
}
