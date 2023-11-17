<!Doctype html>
<html lang="pl">
<title>
    kalkulator
</title>
<head>
    <h1>Kalkulator</h1>
</head>
<body>
    <li>
        Euro kurs 4.32
    </li>
    <li>
        Dolar kurs 3.31
    </li>
    <li>
        Frank kurs 3.98
    </li>
    <br>
<?php
    $pl = 4;
    $i = 'Dolar'; //Euro, Dolar, Frank

    echo "kwota $pl <br><br>";

    switch ($i)
    {
        case 'Euro':
            echo("po zmianie na ".$i. $pl * 4.32);
            break;
        case 'Dolar':
            echo("po zmianie na ".$i. $pl * 3.21);
            break;
            case 'Frank':
                echo("po zmianie na ".$i. $pl * 3.98);
            break;
    }
?>

</body>
</html>