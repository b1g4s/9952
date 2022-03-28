<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--Custom CSS-->
    <style>
        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        /* Firefox */
        input[type=number] {
        -moz-appearance: textfield;
        }
    </style>
    <!--Bootstrap javascript-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <!--Title-->
    <title>Document</title>
</head>
<body style="background-color: #333;">
    <h1 class="text-center text-white">Ficha de Inscrição</h1>
    <h6 class="text-center text-white">(A preencher com maiúsculas)</h6>
    <div class="container-lg bg-white p-3 rounded">
        <form action="" method="post" class="row g-3">
        <h4>Dados Pessoais</h4>
            <div class="col-md-12">
                <label for="nomeCompleto" class="form-label">Nome completo:</label>
                <input type="text" id="nomeCompleto" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="dataNasc" class="form-label">Data de Nascimento:</label>
                <input type="date" id="dataNasc" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="nacionalidade" class="form-label">Nacionalidade:</label>
                <input type="text" id="nacionalidade" class="form-control">
            </div>
             <div class="col-md-6">
                <label for="naturalidade" class="form-label">Naturalidade:</label>
                <input type="text" id="naturalidade" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="estadoCivil" class="form-label">Estado Civil:</label>
                <input type="text" id="estadoCivil" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="cc" class="form-label">Cartão de Cidadão:</label>
                <input type="text" id="cc" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="dataValidade" class="form-label">Data de Validade:</label>
                <input type="date" id="dataValidade" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="contribuinte" class="form-label">Nº de Contribuinte:</label>
                <input type="text" id="contribuinte" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="profissao" class="form-label">Profissão:</label>
                <input type="text" id="profissao" class="form-control">
            </div>
            <div class="col-md-12">
                <label for="hbl" class="form-label">Hab. Literárias/Curso que frequenta:</label>
                <input type="text" id="hbl" class="form-control">
            </div>
            <h4>Contactos</h4>
            <div class="col-md-12">
                <label for="morada" class="form-label">Morada:</label>
                <input type="text" id="morada" class="form-control">
            </div>
            <div class="col-md-2">
                <label for="codPostal" class="form-label">Código Postal:</label>
                <input type="text" id="codPostal" class="form-control">
            </div>
            <div class="col-md-10">
                <label for="localidade" class="form-label">Localidade:</label>
                <input type="text" id="localidade" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="concelho" class="form-label">Concelho:</label>
                <input type="text" id="concelho" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="regDist" class="form-label">Região/Distrito:</label>
                <input type="text" id="regDist" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="telefone" class="form-label">Telefone:</label>
                <input type="number" id="telefone" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="telemovel" class="form-label">Telemóvel:</label>
                <input type="number" id="telemovel" class="form-control">
            </div>
            <div class="col-md-12">
                <label for="email1" class="form-label">Email 1:</label>
                <input type="email" id="email1" class="form-control">
            </div>
            <div class="col-md-12">
                <label for="email2" class="form-label">Email 2:</label>
                <input type="email" id="email2" class="form-control">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>
    </div>
</body>
</html>