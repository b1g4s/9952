<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Conversão de Temperaturas</title>
</head>
<body>
    <h1 style="text-align: center;">Conversão de Temperaturas</h1>
    <div class="container">
        <h2>Celcius</h2>
        <form action="" method="POST">
            <div class="row">
                <div class="col-25">
                    <label for="c">Graus Célsius:</label>
                </div>
                <div class="col-75">
                    <input type="text" name="c">
                </div>
            </div>
            <div class="row">
                <input type="submit" value="Enviar">
            </div>
        </form>
        <?php
        $c = ""; 
        //ler nº do formulário
        if (empty($_POST['c'])) {
            $c = 0;
        } else {
            $c = $_POST['c'];
            $f = ($c * 1.8) + 32;
            $k = ($f + 459.67)/1.8;

            echo "<p>Celcius: $c ºC</p>";
            echo "<p>Fahrenheit: $f ºF</p>";
            echo "<p>Kelvin: $k ºK</p>";
        }
        ?>
    </div>
    <div class="container">
        <h2>Celcius</h2>
        <form action="" method="POST">
            <div class="row">
                <div class="col-25">
                    <label for="f2">Graus Fahrenheit:</label>
                </div>
                <div class="col-75">
                    <input type="text" name="f2">
                </div>
            </div>
            <div class="row">
                <input type="submit" value="Enviar">
            </div>
        </form>
        <?php
            $f2 = "";
            //ler nº do formulário
            if (empty($_POST['f2'])) {
                $f2 = 0;
            } else {
                $f2 = $_POST['f2'];
                $c2 = ($f2 - 32) / 1.8;
                $k2 = $c2 + 273.15;

                echo "<p>Fahrenheit: $f2 ºF</p>";
                echo "<p>Celcius: $c2 ºC</p>";
                echo "<p>Kelvin: $k2 ºK</p>";
            }
            
        ?>
    </div>
</body>
</html>