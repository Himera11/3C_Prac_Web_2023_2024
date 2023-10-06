<?php
    $number = 0;

    if ($number > 0)
        echo($number." = liczba jest większa od zera<br>");
    else if ($number < 0)
        echo($number." = liczba jest mniejsza od zera<br>");
    else if ($number == 0)
        echo($number." = liczba jest zerem <br>");
    

        $number1 = -1;
        
        switch(true)
        {
            case $number1 > 0:
                echo($number1." = jest większa od zera <br>");
                break;
            case $number1 == 0:
            echo($number1." = jest zerem<br>");
                break;
            case $number1 < 0:
            echo($number1." = jest mniejsze od zera<br>");
                break;

        }
?>