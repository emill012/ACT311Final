<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <title>{{ $title }}</title>

    </head>
    <body>
    			<div class="jumbotron">
    			@if(isset($header))
                  <h1><center>{{ $header }}</center></h1>
            @else
            		<h1>A list of something</h1>
            @endif
            </div>
            <hr>
            @forelse($games as $game => $title)
            	 @if( $loop->first)
            	 	 <table class="table-striped table-bordered">
            	 @endif
                <tr>
                <th>{{ $game }}</th>
                </tr>
                <tr>
                <td>{{ $title }}</td>
                </tr>
                @if( $loop->last)
                	 </table>
                @endif
                @empty
                <h2>No list items</h2>
            @endforelse

				@if(isset($footer))
            		<h3><center>{{ $footer }}</center></h3>
            @else
            		<h3>Default Footer Area</h3>
            @endif


    </body>
</html>
