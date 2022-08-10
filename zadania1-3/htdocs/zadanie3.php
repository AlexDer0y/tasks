<?php 
	
	//przekierowanie do contentu na stronie matce
	//header('location: https://api.chucknorris.io/jokes/random'); 
		
	//wyświetlenie wartości z API na stronie matce lokalnie na nowej stronie
	$jokeJSON = file_get_contents('https://api.chucknorris.io/jokes/random');
	$decoded = json_decode($jokeJSON);
	echo "<b>Random Chuck Norris joke: </b><br/><br/>".$decoded->value;