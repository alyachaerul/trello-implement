<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;

class TrelloController extends Controller
{
    //
    public function index(){
        $id = env('TRELLO_BOARD_ID');
        $endpoint = 'https://api.trello.com/1/boards/' . $id;
        $response = Http::get($endpoint, [
            'key' => env('TRELLO_KEY'),
            'token' => env('TRELLO_TOKEN'),
        ]);
        return view('trello', [
            'response' => $response,
            ]);
    }
}
