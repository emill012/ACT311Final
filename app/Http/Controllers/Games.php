<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Games extends Controller
{    
private $shooters = array(
            'Gears of War' => 'Gears of War 4',
            'Call of Duty' => 'World at War',
            'Battlefield' => 'Battlefield 1',
            'Far Cry' => 'Far Cry 4',
            'Bioshock' => 'Bioshock Infinite'
    );
    
private $rpg = array(
            'Middle-Earth' => 'Shadow of Mordor',
            'Elder Scrolls' => 'Skyrim',
            'Borderlands' => 'Borderlands 2',
            'The Witcher' => 'The Witcher 3',
            'Diablo' => 'Diablo 3'
    );
    
private $sports = array(
            'Madden' => 'Madden NFL 17',
            'MLB: The Show' => 'MLB: The Show 17',
            'WWE2K' => 'WWE 2K17',
            'Forza' => 'Forza Horizon 3',
            'FIFA' => 'FIFA 17'
    );
    
     function home(){
            $result = "This is a website dedicated to gaming and created by Evan Miller for his ACT311 class. On this site you will find a few lists and tables representing my favorite games of the genre's listed. I have also provided some features for you to enter your own favorite game and get it shown to you on the screen. Please enjoy the site for what it is.";

            return view('games', [
				'title' => 'Welcome to EGames',
				'message' => $result,
				'footer' => 'That is a nice site, albeit a tad bit thin'        
        ]);
        }
        
     	function shooters(){
        return view('shooters', [
            'title' => 'EGames - My Favorite Shooters',
            'games' => $this->shooters,
            'header' => 'My Favorite Shooters',
            'footer' => 'These are some great games',
        ]);
    }
    
    	function rpg(){
        return view('rpg', [
            'title' => 'EGames - My Favorite RPGs',
            'games' => $this->rpg,
            'header' => 'My Favorite Role-Playing Games',
            'footer' => 'These are some great games'
        ]);
    }
    
    function sports(){
        return view('sports', [
            'title' => 'EGames - My Favorite Sports Games',
            'games' => $this->sports,
            'header' => 'My Favorite Sports Games',
            'footer' => 'Those are some great games'
        ]);
    }
    
    function overall(){
            $result = "Gears of War 2";

            return view('overall', [
				'title' => 'Overall Favorite Game',
				'message' => $result,
				'footer' => 'That is a great game'
        ]);
        }
}