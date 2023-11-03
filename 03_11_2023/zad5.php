<?php
    $percent = -101;
    if(is_numeric($percent) && $percent >= 0 && $percent <= 100)
    { 
        if($percent >= 0 && $percent <= 30)
        {
            echo"ocena 1";
        }
        else if($percent > 30 && $percent <= 45)
        {
            echo"ocena 2";
        }
        else if($percent > 45 && $percent <= 60)
        {
            echo"ocena 3";
        }
        else if($percent > 60 && $percent <= 74)
        {
            echo"ocena 4";
        }
        else if($percent > 74 && $percent <= 95)
        {
            echo"ocena 5";
        }
        else if($percent > 95)
        {
            echo"ocena 6";
        }
    }
    else
    {
        echo"złe dane";
    }
?>