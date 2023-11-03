<?php
    $price = 5;
    $category = 1;
if(is_numeric($category) && $category > 0)
    switch($category)
    {
        case 1:
            echo"elektronika " .$price * 0.23;
            break;
        case 2:
            echo"odzież " .$price * 0.50;
            break;
        case 3:
            echo"pieczywo " .$price * 2;
            break;
    }
else
echo"złe dane"
?>