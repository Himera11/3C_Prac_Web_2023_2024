<?php
    $number = 3;
    $number1 = -2;
    $number2 =-4;

    if ($number < $number1 && $number < $number2) 
        echo("najmniejsza jest = ".$number."<br>");
    else if($number1 < $number2)
        echo("najmniejsza jest = ".$number1."<br>");
    else 
        echo("najmniejsza jest = ".$number2."<br>");
    

        
        
        switch($number1)
        {
            case $number < $number1 && $number < $number2:
                echo($number." = jest najmniejsza");
                break;
            case $number1 < $number2:
            echo($number1." = jest najmniejsza");
                break;
            default:
            echo($number2." = jest najmniejsza");
                break;

        }
?>