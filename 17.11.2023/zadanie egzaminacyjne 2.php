<!Doctype html>
<html lang="pl">
<title>
    języki
</title>
<head>
    <h1>Wybór języka</h1>
</head>
<body>
    podstawowy język polski
    <br>
    do wyboru:
    <li>
        angielski
    </li>
    <li>
        niemiecki
    </li>
    <li>
        hiszpański
    </li>
    <br>
    wybrany język

    <?php
    $jezyk = "o";
    if($jezyk == "a")
        echo"angielski";
    else if($jezyk == "n")
        echo"niemiecki";
    else if($jezyk == "h")
        echo"hiszpański";
    else
    echo "Polski";
    
?>

</body>
</html>
