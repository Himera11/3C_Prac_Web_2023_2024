<?php
    $number = 5;
    if ($number / 2 == 0)
        echo("liczba jest parzysta");
    else
        echo($number." = liczba jest nie parzysta <br>");




        $number2 = 3;
        
        switch($number2 % 2 == 0)
        {
            case 0:
                echo($number2." = nie parzysta<br>");
                break;
            case 1:
            echo($number2." = parzysta<br>");
                break;

        }
    
?>