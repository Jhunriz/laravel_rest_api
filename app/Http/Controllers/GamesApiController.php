<?php

namespace App\Http\Controllers;

use App\Models\Games_api;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class GamesApiController extends Controller
{
    public function displayOfTheGames() {
        return Games_api::all();
    }

    public function addGamesApi(Request $request) {

       $validate = $request->validate([
        'title' => 'required',
        'description' => 'required'
        ]);


        $games = $request->all();
        Games_api::create($games);
        return 'success';
    }
}
