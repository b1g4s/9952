<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
            <?php 
                $nota = "";
                if(empty($_POST['nota'])){
                $msg = "";
                }
                else {
                $nota = $_POST['nota'];
                if ($nota < 9) {
                    $msg = "Reprovado";
                }
                elseif ($nota < 10) {
                    $msg = "Vais a oral!";
                }
                else {
                    $msg = "Aprovado";
                }
            }
        ?>  
        <form action="" method="post">
            <div class="row">
                <div class="col-25">
                    <label for="nota">Nota:</label>
                </div>
                <div class="col-75">
                    <input type="text" name="nota" placeholder="Nota...">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="resul">Resultado</label>
                </div>
                <div class="col-75">
                    <input type="text" nome = "resul" value="<?php echo $msg ?>" readonly placeholder="Resultado...">
                </div>
            </div>
            <div class="row">
                    <input type="submit">
            </div>
        </form>
    </div>
</body>
</html>