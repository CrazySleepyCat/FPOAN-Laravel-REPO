<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Joke;

class JokeController extends Controller
{
    //
    public function __invoke()
    {
        $jokes = [];

        /*$jokes = json_decode(file_get_contents("https://api.icndb.com/jokes"), true);
        foreach ($jokes["value"] as $key => $joke) {
            $jk = new Joke();
            $jk->joke = $joke["joke"];
            $jk->save();
        }*/

        foreach (Joke::all() as $jk) {
            $jokes[]= ["id"=> $jk->id, "joke"=> $jk->joke];
        }

        return view('joke_page', ["jokes"=>$jokes]);
    }
}
