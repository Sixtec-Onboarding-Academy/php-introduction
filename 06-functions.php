<?php

// - O que são funções em PHP?
function formatDate($date)
{
    return date("d/m/Y h:i:s", strtotime($date));
}

$date = "2021-12-31 23:59:59";
echo formatDate($date);

$date = "2021-12-10 23:59:59";
echo formatDate($date);
