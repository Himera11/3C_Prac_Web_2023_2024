<?php
    $sideA = 3;
    $sideB = 4;
    $sideC = 5;
    if(is_numeric($sideA) && is_numeric($sideB)  && is_numeric($sideC)) 
    {
        if($sideA == $sideB && $sideB == $sideC)
        {
            echo"trójkąt jest równoboczny";
        }
        else if($sideA == $sideB || $sideB == $sideC || $sideA == $sideC)
        {
            echo"Trójkąt jest równoramienny";
        }
        else if($sideA == $sideB && $sideB == $sideC)
        {
            echo"trójkąt jest równoboczny";
        }
        else if(($sideA*$sideA+$sideB*$sideB==$sideC*$sideC) || ($sideA*$sideA+$sideC*$sideC==$sideB*$sideB) || ($sideC*$sideC+$sideB*$sideB==$sideA*$sideA))
        {
        echo"Trojkąt prostokątny";
        }
        else
        {
            echo"inny";
        }
    }
    else
    echo"złe dane";
?>