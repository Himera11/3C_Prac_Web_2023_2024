<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>egzamin2</title>
	</head>
	<body>
        wynik = 
        <?php
            $wynik = 0;
            $number = 10;
            do {
                $wynik += $number;
                $number++;
            } while ($wynik <= 1000);
            echo $wynik;
        ?>
	</body>
</html>