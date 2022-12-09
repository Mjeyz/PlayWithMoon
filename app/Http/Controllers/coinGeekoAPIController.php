<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Codenixsv\CoinGeckoApi\CoinGeckoClient;

class coinGeekoAPIController extends Controller
{
    //function to get a current value of a coin
    public function index(){
        $client = new CoinGeckoClient();
        $data = $client->simple()->getPrice('bitcoin', 'usd');
        return $data;
    }
}
