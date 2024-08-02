<?php

function validateInput(string $input, bool $isRequired = true)
{
    $issetInput = isset($_REQUEST[$input]);

    /* check exists input */
    if(! $issetInput) {
        echo ucfirst($input) . " do not exists!";

        exit;
    }

    /* check if required and accepted input */
    if($isRequired && empty($_REQUEST[$input])) {
        echo ucfirst($input) . " is required!";

        exit;
    }

    return $_REQUEST[$input];
}

$canDrive = false;

$name = validateInput('name');
$age = validateInput('age');
$email = validateInput('email', false);

if($age >= 18) {
    $canDrive = true;
}

if($canDrive) {
    echo "O usuário {$name}, com {$age} anos, pode dirigir.";

    exit;
}

echo "O usuário {$name}, com {$age} anos, não pode dirigir.";

exit;
