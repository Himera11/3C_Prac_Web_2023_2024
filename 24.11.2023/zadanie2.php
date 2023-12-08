<?php
    echo"pętla for<br>";

    for($i=100; $i > 90; $i--)
    {
        echo $i . "<br>";
    }

    echo"pętla while<br>";
    

    $number = 100;
    while ($number > 90) {
        echo $number-- . "<br>";
    }
    
    echo"pętla do-while<br>";

    $number1 = 100;
    do {
        echo $number1-- . "<br>";
    } while ($number1 > 90);

?>