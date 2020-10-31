<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class TrelloController extends Controller
{
    //
    public function index(){
        $board = $this->getBoard();
        $list = $this->getList();
        
        return view('trello', [
            'lists' => $list,
            'boards'=> $board,
        ]);
    }

    public function getBoard() {
        $id = env('TRELLO_BOARD_ID');
        $endpoint = 'https://api.trello.com/1/boards/' . $id;
        $response = Http::get($endpoint, [
            'key' => env('TRELLO_KEY'),
            'token' => env('TRELLO_TOKEN'),
        ]);
        return $response;
    }

    public function getList() {
        $id = env('TRELLO_BOARD_ID');
        $endpoint = 'https://api.trello.com/1/boards/' . $id . '/lists';
        $response = Http::get($endpoint, [
            'key' => env('TRELLO_KEY'),
            'token' => env('TRELLO_TOKEN'),
        ]);
        return $response;
    }

}
