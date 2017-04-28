<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', 'Games@home');
Route::get('/shooters', 'Games@shooters')->name('shooters');
Route::get('/rpg', 'Games@rpg')->name('rpg');
Route::get('/sports', 'Games@sports');
Route::get('/overall', 'Games@overall');

Route::get('/yourfav/{game}', 'Input@yourfav');
Route::get('/shooters/{x}/{y}', 'Input@yourshooters');

Route::group(['prefix' => 'random'], function () {
    Route::get('{x}', function ($x){
        $message = $x;
        
        return "You entered $message";
    });
    Route::get('{x}/{y}', function ($x,$y){
    	  $message = $x+$y;
    	  
    	  return "The sum of $x and $y is $message";
    });
});

Route::get('/about', function(){
    $result = <<<EOT
    	/ -- This is the Home page where you can navigate the website<br>
		/about -- This page<br>
		/currentfav -- Will show my favorite current game<br>
		/yourfav/{game} -- Prints out your favorite game to the screen<br>
		/shooters/{x}/{y} -- Prints out your 2 favorite games on the screen<br>
		/random/{x} -- Displays the number you entered for x<br>
		/random/{x}/{y} -- Displays the sum of the 2 numbers entered<br>
		<br>
		Thank you for using the EGames Website | copyright Evan Miller, 2017<br>
EOT;

		return $result;
});

Route::get('/currentfav', function(){
	$message = 'Gears of War 4';
	
	return $message;
});
