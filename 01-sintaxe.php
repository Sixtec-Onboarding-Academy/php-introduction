<?php

// my first comment
echo "Hello World!";

/**
 * set name cliente to
 * attribute $name on class
 *
 * @param string $name
 * @return string
 */
function setName(string $name): string
{
    $this->name = $name;
    return $this->name;
}
