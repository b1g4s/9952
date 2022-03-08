<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Area do quadrado</title>
</head>

<body>
    <h2>Área do circulo</h2>
    <div class="container">
        <form action="" method="POST">
            <div class="row">
                <div class="col-25">
                    <label for="lado">Lado</label>
                </div>
                <div class="col-75">
                    <input type="text" name="lado">
                </div>
            </div>
            <div class="row">
                <input type="submit">
            </div>
        </form>
    </div>
    <?php 
        //ler nº do formulário
        $lado = $_POST['lado'];
        $perimetro = $lado + $lado + $lado + $lado;
        $area = $lado * $lado;

        echo "<p>Lado: $lado</p>";
        echo "<p>Perímetro: $perimetro</p>";
        echo "<p>Área: $area</p>";
    ?>
</body>

</html>