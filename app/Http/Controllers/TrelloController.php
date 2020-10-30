<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Config;

class TrelloController extends Controller
{
    //
    public function index(){
        return view('trello', [
            'key' => env('TRELLO_KEY'),
            'token' => env('TRELLO_TOKEN'),
            ]);
    }
}
