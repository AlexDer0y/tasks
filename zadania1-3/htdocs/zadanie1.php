<?php

$stringToCheck = "Zdanie do sprawdzenia.";
$searchedString = "Zda";

if(strpos($stringToCheck, $searchedString)!==FALSE) {
	$position = strpos($stringToCheck, $searchedString) + 1; // zakładamy że pierwsza litera ma numer 1, a nie 0

	echo "Ciąg: <b>$searchedString</b> znajduje sie w ciągu: <b>$stringToCheck</b> i zaczyna się na pozycji nr: <b>$position</b>";
}
else 
	echo "Brak szukanego ciągu w tym przykładzie.";

echo "<br><br>";