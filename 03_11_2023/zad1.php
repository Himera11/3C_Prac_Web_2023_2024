<?php
    $number = "abd";
    if(is_numeric($number))
        {
        if($number > 0)
        {
            echo"liczba jest dodatnia";
         }
        else if($number < 0)
        {
            echo"liczba jest ujemna";
        }
        else if($number == 0)
        {
            echo"liczba jest równa zero";
        }
        else if ($number === "a")
        {
            echo"złe dane";
        }
    }
    else
    echo"złe dane";
?>