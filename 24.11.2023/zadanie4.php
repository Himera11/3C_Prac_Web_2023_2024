<?php
    echo"pętla for<br>";

    for($i=1; $i < 11; $i++)
    {
        echo $i . " pierwiastek ". sqrt($i). "<br>";
    }

    echo"pętla while<br>";
    

    $number = 1;
    while ($number < 11) {
        echo $number . " pierwiastek ". sqrt($number). "<br>";
        $number++;
    }
    
    echo"pętla do-while<br>";

    $number1 = 1;
    do {
        echo $number1 . " pierwiastek ". sqrt($number1). "<br>";
        $number1++;
    } while ($number1 < 11);

?>