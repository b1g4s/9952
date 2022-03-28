<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/form.css">
    <title>Forms e ca.</title>
</head>
<body>
    <h2>Inscrição na Newsletter</h2>
    <?php 
        //dados
        $servername = "localhost";
        $username = "root";
        $password ="";
        $dbname = "bd_site";

        //testar ligacao
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Falhou a ligação");
        }
        else {
            echo ("Ligação bem sucedida!");
        }

        $nome = $email = $concordo = "";
        $erro = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            if (empty($_POST['concordo'])){
                $error = "Tem de concordar para se inscrever";
            }
            else {
                $concordo = $_POST['concordo'];
                $erro = valida($concordo, $erro);
            }

        }

        //linha sql
        $sql = "INSERT INTO newsletter (nome, email) VALUES ('$nome', '$email')";

        if ($conn->query($sql)===TRUE){
            echo "Registo Inserido com sucesso";
        }
        else {
            echo "Erro!";
        }
        function valida ($pd, $erro) {
            if ($pd != "Sim"){
                $erro = "Tem de concordar para se inscrever";
            }
            
            return $erro;
        }
    ?>
    <div class="container">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="row">
                <div class="col-25">
                    <label for="nome">Nome:</label>
                </div>
                <div class="col-75">
                    <input type="text" name="nome">
                </div>  
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="emeal">Email:</label>
                </div>
                <div class="col-75">
                    <input type="email" name="email" id="email">
                </div>
            </div>
            <div class="row">
                <input type="submit" value="Submeter">
            </div>
            <div class="row">
                <input type="reset" value="Cancelar">   
            </div>
            <div class="row">
                <input type="radio" name="concordo" value="sim">Concordo com as politicas de proteção de dados de Volodymyr Zelensky   
            </div>
            <div class="row">
                <input type="radio" name="concordo" value="não">Não concordo com as politicas de proteção de dados de Volodymyr Zelensky  
            </div>
        </form>
        <?php echo $erro; ?>
        <h2>Dados do form</h2>
        <?php 
            echo $nome."<br>";
            echo $email."<br>";
            echo $concordo."<br>";
        ?>
    </div>
</body>
</html>