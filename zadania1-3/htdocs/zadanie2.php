<?php

$numbersString = "1,2,3,4,5";

echo "Ciąg cyfr do zsumowania, oddzielonych <u>przecinkami</u>: <b>$numbersString </b> <br><br>";

$numbers = str_replace(',', '+', $numbersString);
$sum = eval("return $numbers;");

echo "Suma liczb tego ciągu: <b>$sum</b>";
