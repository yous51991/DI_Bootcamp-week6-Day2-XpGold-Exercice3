<?php

$year = $_POST['annee'];

function find_century($year)
{
    if ($year <= 0) {
        echo "0 et les nombre negative ne sont pas pris en compte"
        , "pour une annee";
    } elseif ($year <= 100) {
        echo "1st century\n";
    } elseif ($year % 100 == 0) {
        echo $year / 100 ,"th century";
    } else {
        echo floor($year / 100) + 1
        , "th century";
    }
}


find_century($year);