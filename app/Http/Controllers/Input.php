<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Input extends Controller
{
     function yourfav($game){
            $result = "Your favorite game is $game";
            return view('input', [
				'title' => 'Your Favorite Game',
				'message' => $result,
				'footer' => 'That is a nice game'        
        ]);
        }
     function yourshooters($x,$y){
            $result = "Your favorite shooters are $x and $y";

            return view('input', [
				'title' => 'Your Favorite Shooters',
				'message' => $result,
				'footer' => 'These are nice games'        
        ]);
        }   
}
