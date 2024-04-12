<!Doctype html>
    <html lang="pl">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Licznik- cookie</title>
        </head>
        <body>
            <form method="post"></form>
            <p>
                wpisz date urodzin
            </p>
            <input type="date" name ="data" id="data">
            <input type="submit" value = "wyslij" name = "submit">
            <?php
            if(isset($_POST['data']))
            $t = $_POST['data'];
            setcookie("data", $t, time() + 3600);
            if(date('d-m', strtotime($t))=== date('d-m'))
            echo "wszystkiego naj z okazji urodizn"
            ?>
        </body>
    </html>