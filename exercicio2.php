<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>
</head>
<body>
    <h2>Tipos de variáveis</h2>
        <?php 
            # string
            $txt = "Programação";
            $txtx;
            $txtx="Web";

            echo "Curso de $txt $txtx <br>";
            echo "Curso de ".$txt." ".$txtx."!";

            print "<h3>Estou aqui e não saio</h3>";
            
            # inteiro
            $x = 2022;
            
            echo $x;
            echo "<br>";
            var_dump($x);
            echo "<br>";
            var_dump($txt);
            echo "<br>";

            # float
            $y = 12.25;

            var_dump($y);
            echo "<br>";
            
            # bool
            $b = true;

            var_dump($b);
            echo "<br>";

            # array
            $ufcd = array("5414","9982","9952");
            var_dump($ufcd);
        ?>
</body>
</html>