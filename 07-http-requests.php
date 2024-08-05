<?php

/**
 * sanitizeInput
 *
 * @param string $input
 * @param mixed $sanitizeType string|int|email|url
 * @return void
 */
function sanitizeInput(string $input, mixed $sanitizeType)
{
    if($sanitizeType == 'string') {
        $sanitizedInput = htmlspecialchars($input);

        return $sanitizedInput;
    }

    switch($sanitizeType) {
        case 'int':
            $sanitizeType = FILTER_SANITIZE_NUMBER_INT;
            break;
        case 'email':
            $sanitizeType = FILTER_SANITIZE_EMAIL;
            break;
        case 'url':
            $sanitizeType = FILTER_SANITIZE_URL;
            break;
    }

    $sanitizedInput = filter_var($input, $sanitizeType);

    if(! $sanitizedInput) {
        echo "Invalid input sanitize field: {$input}!";

        exit;
    }

    return $sanitizedInput;
}

function validateInput(string $input, bool $isRequired = true, mixed $sanitizeType = false)
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

    if($sanitizeType) {
        $sanitizedInput = sanitizeInput($_REQUEST[$input], $sanitizeType);

        return $sanitizedInput;
    }

    return $_REQUEST[$input];
}

$canDrive = false;

$name = validateInput(input: 'name', sanitizeType: 'string');
$age = validateInput(input: 'age', sanitizeType: 'int');
$email = validateInput(input: 'email', sanitizeType: 'email');

if($age >= 18) {
    $canDrive = true;
}

if($canDrive) {
    echo "O usuário {$name}, com {$age} anos, pode dirigir.";

    exit;
}

echo "O usuário {$name}, com {$age} anos, não pode dirigir.";

exit;
