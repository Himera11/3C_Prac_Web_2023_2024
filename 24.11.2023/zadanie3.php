<?php
    echo"pętla for<br>";

    $licznik = 0;
    for($i=100, $licznik = 0; $licznik < 5; $i++)
    {
        if($i % 5 == 0)
        {
        $licznik++;
        echo $i . "<br>";
        }
    }

    echo"pętla while<br>";
    
    $licznik = 0;
    $number = 100;
    while ($licznik < 5) {
        if($number % 5 == 0)
        {
        $licznik++;
        echo $number . "<br>";
        }
        $number++;
    }
    
    echo"pętla do-while<br>";
    $licznik = 0;
    $number1 = 100;
    do {
        if($number1 % 5 == 0)
        {
        $licznik++;
        echo $number1 . "<br>";
        }
        $number1++;
    } while ($licznik < 5);

?>