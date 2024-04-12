<?php
    //setcookie("username", "Damian Manecki", time()+ 1000);
    setcookie("username", "Joe", time()+ 1000);

    echo "cookie: ". $_COOKIE['username'];

    //setcookie("username", "Joe", time()- 1000);


    if(!isset($_COOKIE['username']))
    {
        $ile = 1;
    }
    else
    {
        $ile = (int)$_COOKIE['username'];
        if($ile < 1)
            $ile = 1;
        $ile++;
    }
    setcookie("username", "$ile");
    ?>
    
    <!Doctype html>
    <html lang="pl">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Licznik- cookie</title>
        </head>
        <body>
            <p>
                <?php
                    if($ile == 10)
                echo "witamy, odwiedziłeś nas 10 razy";
                ?>
            </p>
        </body>
    </html>