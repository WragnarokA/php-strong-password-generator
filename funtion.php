<?php
function generatePsw($length,  $repetion)
{
    $result = "";

    $lowercase = "abcdefghijklnmopqrstuvwxyz";
    $uppercase = strtoupper($lowercase);
    $numbers = "0123456789";
    $symbol = "!?&%$<>^+-*/()[]{}@#_=";

    $allowedChar = $lowercase . $uppercase . $numbers . $symbol;

    $charNumber = strlen($allowedChar);


    while (strlen($result) < $length) {
        $randomNum = rand(0, $charNumber - 1);
        $currentChar = $allowedChar[$randomNum];

        if ($repetion || !str_contains($result, $currentChar)) {
            $result .= $currentChar;
        }
    }

    return htmlspecialchars($result);
}
