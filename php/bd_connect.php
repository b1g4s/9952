<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    //dados
    $servername = "localhost";
    $username = "root";
    $password ="";

    //testar ligacao
    $conn = new mysqli($servername, $username, $password);
    if ($conn->connect_error) {
        die("Falhou a ligação");
    }
    else {
        echo ("Ligação bem sucedida!");
    }
?>
</body>
</html>