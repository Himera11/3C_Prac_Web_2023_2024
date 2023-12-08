
<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>egzamin</title>
	</head>
	<body>
        wynik = 
        <?php
            $wynik = 0;
            for ($i=100; $i < 200 ; $i++) 
            { 
            if($i % 2 == 0)
            {
            $wynik += $i;
            }
        }
        echo $wynik;
        ?>
	</body>
</html>