<?php
    $number = 0;

    if ($number >= 18)
        echo($number." = dorosły<br>");
    else if ($number < 11)
        echo($number." = dziecko<br>");
    else if ($number >= 11 && $number <= 17)
        echo($number." = nastolatek<br>");
    

        $number1 = 19;
        
        switch(true)
        {
            
            case $number1 < 11:
            echo($number1." = dziecko<br>");
                break;
            case $number1 >= 18:
            echo($number1." = dorosły");
                break;
            default:
            echo($number1." = nastolatek<br>");
                    break;
        }
?>