<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Exercicio 7</title>
</head>
<body>
    <h1 style="text-align: center;">Exercicio 7</h1>
    <div class="container">
        <h2>Altura Ideal</h2>
        <form action="" method="POST">
            <div class="row">
                <div class="col-25">
                    <label for="altura">Altura</label>
                </div>
                <div class="col-75">
                    <input type="text" name="altura" placeholder="Altura">
                </div>
                <div class="row">
                    <input type="radio" name="sexo" value="m" checked>Masculino
                    <input type="radio" name="sexo" value="f">Feminino
                </div>
                <div class="row">
                    <input type="submit" value="Calcular">
                </div>
            </div>
        </form>
    </div>
    <div class="container">
        <h2>Peso Ideal</h2>
        <form action="" method="POST">
            <div class="row">
                <div class="col-25">
                    <label for="peso">Peso</label>
                </div>
                <div class="col-75">
                    <input type="text" name="peso" placeholder="Peso">
                </div>
                <div class="row">
                    <input type="radio" name="sexo" value="m" checked>Masculino
                    <input type="radio" name="sexo" value="f">Feminino
                </div>
                <div class="row">
                    <input type="submit" value="Calcular">
                </div>
            </div>
        </form>
    </div>
    <?php
        if (empty($_POST['peso'])) {
            $peso = 0;
        }
        else {
            $sexo = $_POST['sexo'];
            if ($sexo == "m") {
                $peso = $_POST['peso'];
                $altura = ($peso + 58) / 72.7;

                echo "<p>Altura Ideal: $altura m</p>";
            }
            else {
                $peso = $_POST['peso'];
                $altura = ($peso + 44.7) / 44.7;

                echo "<p>Altura Ideal: $altura m</p>";
            }
        }
    ?>
    <?php
        if (empty($_POST['altura'])) {
            $altura = 0;
        }
        else {
            $sexo = $_POST['sexo'];
            if ($sexo == "m") {
                $altura = $_POST['altura'];
                $peso = (72.7 * $altura) - 58;

                echo "<p>Peso Ideal: $peso Kg</p>";
            }
            else {
                $altura = $_POST['altura'];
                $peso = (62.1 * $altura) - 44.7;

                echo "<p>Peso Ideal: $peso Kg</p>";
            }
        }
    ?>
</body>
</html>
