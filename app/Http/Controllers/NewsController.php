<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class NewsController extends Controller
{
    public function getData(){
       $client = new Client();
       $request = $client->get('http://newsapi.org/v2/top-headlines?country=au&apiKey=7fe4ef5c475b44e99fe78463247a8d14');
       $response = $request->getBody();
       $result = json_decode($response);
       return view('home',['artikel'=>$result->articles]);
    }
    public function searchData(Request $request){
        $client = new Client();
        $query = $request->keyword;
        $req = $client->get('http://newsapi.org/v2/top-headlines?country=au&apiKey=7fe4ef5c475b44e99fe78463247a8d14&q='.$query);
        $response = $req->getBody();

        $result = json_decode($response);
        return view('home',['artikel'=>$result->articles]);
    }
}
