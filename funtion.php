<?php
function generatePsw($length)
{
    $result = "";

    $lowercase = "abcdefghijklnmopqrstuvwxyz";
    $uppercase = strtoupper($lowercase);
    $numbers = "0123456789";
    $symbol = "!?&%$<>^+-*/()[]{}@#_=";

    $allowedChar = $lowercase . $uppercase . $numbers . $symbol;

    $charNumber = strlen($allowedChar);

    for ($i = 0; $i < $length; $i++) {
        $randomNum = rand(0, $charNumber - 1);
        $currentChar = $allowedChar[$randomNum];
        $result .= $currentChar;
    }

    return $result;
}

$result = "";
if (isset($_GET["pwdlen"])) {
    $pwdLength = $_GET["pwdlen"];
    $result = generatePsw($pwdLength);
}
