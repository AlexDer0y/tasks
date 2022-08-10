<?php

$ciagCaly = "Zdanie do sprawdzenia.";
$ciagSzukany = "dan";

if(strpos($ciagCaly, $ciagSzukany)==TRUE) {
	$nrPozycji = strpos($ciagCaly, $ciagSzukany) + 1; // zakładamy że pierwsza litera ma numer 1, a nie 0

	echo "Ciąg: <b>$ciagSzukany</b> znajduje sie w ciągu: <b>$ciagCaly</b> i zaczyna się na pozycji nr: <b>$nrPozycji</b>";
}
else 
	echo "Brak szukanego ciągu w tym przykładzie.";

echo "<br><br>";

?>