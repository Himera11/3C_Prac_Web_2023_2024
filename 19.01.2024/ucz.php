<?php

if(!empty($_POST['imię'])&&!empty($_POST['nazwisko'])&&!empty($_POST['data'])&&!empty($_POST['miejsce']))
{
    echo "Pomyślnie zarestrowano nowego użytkownika. \n Dane:<br>";
    echo "imie: ".$_POST['imię']."<br>";
    echo "nazwisko: ".$_POST['nazwisko']."<br>";
    echo "data urodzenia: ".$_POST['data']."<br>";
    echo "miejsce urodzenia: ".$_POST['miejsce']."<br>";
    if(!isset($_POST['płeć']))
    {
        echo "<b><h1>Zaznacz płeć!!<br>";
    }
    else
    {
        echo "płeć: ".$_POST['płeć']."<br>";
    }
    echo ($_POST['Klasa']);
    if(!empty($_POST['idk']))
    {
        echo"<ul>";
        foreach($_POST['idk'] as $wartosc)
        {
        echo"<li>$wartosc</li>";
        }
        echo"</ul>";
    }
    else
    {
        echo"nie wybrano";
    }
}
else
echo"<b>nie wypełniono najważniejszych danych";
?>