<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Conversão metrica</title>
</head>
<body>
    <h2>Conversão metrica</h2>
    <div class="container">
        <form action="" method="POST">
            <div class="row">
                <div class="col-25">
                    <label for="km">Quilómetro</label>
                </div>
                <div class="col-75">
                    <input type="text" name="km">
                </div>
            </div>
            <div class="row">
                <input type="submit" value="Enviar">
            </div>
        </form>
    </div>
    <?php 
        //ler nº do formulário
        $medida = $_POST['km'];
        $hm = $medida * 10;
        $dam = $medida * 100;
        $m = $medida * 1000;
        $dm = $medida * 10000;
        $cm = $medida * 100000;
        $mm = $medida * 1000000;

        echo "<p>Quilómetro: $medida km</p>";
        echo "<p>Hectómetro: $hm hm</p>";
        echo "<p>Decâmetro: $dam dam</p>";
        echo "<p>Metro: $m m</p>";
        echo "<p>Decímetro: $dm cm</p>";
        echo "<p>Centímetro: $cm cm</p>";
        echo "<p>Millímetro: $mm mm</p>";
    ?>
</body>
</html>