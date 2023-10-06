<?php
    $number = 160;   ;

    if ($number >= 100 && $number < 150)
        echo($number." = jest w przedziale<br>");
    else
        echo($number." = nie jest w przedziale<br>");
    

        $number1 = 0;
        

        switch($number1 >= 100 && $number1 < 150)
        {
            case 0:
                echo($number1." = nie jest <br>");
                break;
            case 1:
            echo($number1." = jest<br>");
                break;

        }
?>