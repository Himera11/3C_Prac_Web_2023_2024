<?php
    $a = 2;
    $b = -4;
    $dokladnosc = 0.01;

    $sr = 0;
    $fa = funkcjax($a);
    while ($b - $a > $dokladnosc) 
    {
        $sr = ($a + $b) / 2;
        $fs = funkcjax($sr);
        if ($fa * $fs < 0) 
        {
            $a = $a - $dokladnosc;
            $b = $sr;
        }
        else
        {
            $a = $sr;
            $b = $b - $dokladnosc;
            $fa = $fs;
        }
    }
    echo $sr;







    function funkcjax($x)
    {
        return $x * $x - 2;
    }
?>