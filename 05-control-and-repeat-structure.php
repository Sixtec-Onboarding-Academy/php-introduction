<?php

/* condicional structure */
$name = "Mário Lucas";

/* if, else and elseif */
if($condition) {
    // if my condition is true
}

if($condition) {
    // if my condition is true
} else {
    // if my condition is false
}

$animal = "dog";

if($animal == "dog") {
    echo "I love dogs!";
} elseif($animal == "cat") {
    echo "I love cats!";
} else {
    echo "I love animals!";
}

/* switch case */
$weekendDay = 1;

switch($weekendDay) {
    case 1:
        echo "Sunday";
        break;
    case 2:
        echo "Monday";
        break;
    case 3:
        echo "Tuesday";
        break;
    case 4:
        echo "Wednesday";
        break;
    case 5:
        echo "Thursday";
        break;
    case 6:
        echo "Friday";
        break;
    case 7:
        echo "Saturday";
        break;
    default:
        echo "Invalid day";
}

/* repeat structures */

for($i = 0; $i < 10; $i++) {
    echo $i;
}

$animals = [
    [
        'type' => 'dog',
        'name' => 'Rex'
    ],
    [
        'type' => 'cat',
        'name' => 'Miau'
    ],
    [
        'type' => 'bird',
        'name' => 'Piu'
    ],
    [
        'type' => 'fish',
        'name' => 'Nemo'
    ]
];

foreach ($animals as $key => $animal) {
    echo $animal['name'] . ' is a ' . $animal['type'];
}

$animals = ["dog", "cat", "bird", "fish"];

foreach($animals as $animal) {
    echo $animal;
}

$animals = ["dog", "cat", "bird", "fish"];

$a = 0;

while ($a <= count($animals)) {
    echo $animals[$a];

    $a++;
}

$animals = ["dog", "cat", "bird", "fish"];

$a = 0;

do {
    echo $animals[$a];

    $a++;
} while ($a <= count($animals));
