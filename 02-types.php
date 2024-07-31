<?php

// string, integer, float, boolean, array, object

// string type
$firstName = "JOHN";
$lastName = "DOE";

// concat strings
$fullName = $firstName . " " . $lastName;

// concat with interpolation
$fullName = "{$firstName} {$lastName}";

/* work with php strings */
// echo $fullName . PHP_EOL;
// echo strlen($firstName) . PHP_EOL;
// echo strtoupper($firstName) . PHP_EOL;
// echo strtolower($fullName) . PHP_EOL;
// echo ucfirst($fullName) . PHP_EOL;
// echo ucwords($fullName) . PHP_EOL;

// interger type
$age = 30;
var_dump($age);

$age = (float) $age;
var_dump($age);

$age = (string) $age;
var_dump($age);

$age = (bool) $age;
var_dump($age);

// float type
$height = 1.80;

// boolean type
$admin = true;

// array type
$addrress = [
    "street" => "Rua 1",
    "number" => 123,
    "neighborhood" => "Bairro 1",
    "city" => "Cidade 1",
    "state" => "Estado 1",
    "country" => "País 1",
    "zip" => "12345-678"
];

// object type
$client = new stdClass();
$client->name = "John Doe";
$client->age = 30;
$client->height = 1.80;

// var_dump($name);
// var_dump($age);
// var_dump($height);
// var_dump($admin);
// var_dump($addrress);
// var_dump($client);
