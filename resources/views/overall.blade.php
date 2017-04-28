<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <title>EGames - {{ $title }}</title>

    </head>
    <body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/">EGames</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="/">Home</a></li>
      <li><a href="/shooters">Shooters</a></li>
      <li><a href="/rpg">RPG</a></li>
      <li><a href="/sports">Sports</a></li>
      <li class="active"><a href="/overall">Overall</a></li>
      <li><a href="/about">About</a></li>
    </ul>
  </div>
</nav>
    
    			<div class="jumbotron">
            <h1><center>{{ $title }}</center></h1>
           	</div> 
            <hr>
            <h1><center>{{ $message }}</center></h1>
            <center><img src="http://vignette2.wikia.nocookie.net/gearsofwar/images/1/10/Landown_attack.jpg/revision/latest?cb=20130223025643" style="width:750px height:500px;"></center>
            <hr>
            <center>{{ $footer }}</center>
    </body>
</html>