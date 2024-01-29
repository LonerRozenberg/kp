<?php
    define("MIN", 10);
    define("MAX", 50);

    $x = 15;

    if ($x > MIN && $x < MAX) 
    {
        echo "+";
    }   
    elseif ($x == MIN || $x == MAX) 
    {
        echo "+-";
    } 
    else 
    {
    echo "-";
    }
    ?>