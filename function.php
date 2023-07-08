<?php
function randomNum($min, $max) {
    return rand($min, $max);
}

function createBaseString($charsToUse, $letters, $numbers, $symbols) {
    $fullCharacters = '';

    if(count($charsToUse) > 0) {
        if(in_array('L', $charsToUse)) {
            $fullCharacters .= $letters;
        }
        if(in_array('N', $charsToUse)) {
            $fullCharacters .= $numbers;
        }
        if(in_array('C', $charsToUse)) {
            $fullCharacters .= $symbols;
        }
    } else {
        $fullCharacters = $letters . $numbers . $symbols;
    }

    return $fullCharacters;
}

function generatePassword($passwordLength, $allowDuplicates, $charsToUse) {
    $letters = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ";
    $numbers = "0123456789";
    $symbols = "/*#ç@-_.!=%€$&";
    $password = '';

    $baseString = createBaseString($charsToUse, $letters, $numbers, $symbols);

    if(!$allowDuplicates && $passwordLength > strlen($baseString)) {
        return 'La lunghezza richiesta è troppo grande per generare una password senza duplicati.';
    }

    if(empty($passwordLength) || $passwordLength < 8 || $passwordLength > 24) {
        return 'La password deve avere una lunghezza compresa tra 8 e 24 caratteri.';
    }

    while(strlen($password) < $passwordLength) {
        $index = randomNum(0, strlen($baseString) - 1);
        $char = $baseString[$index];
        $password .= $char;
    }

    session_start();
    $_SESSION['password'] = $password;
    header('Location: result.php');
}

?>