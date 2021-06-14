<?php
include("config.php");

use App\Classes\Usuario;

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $usuario = (new Usuario());
    if ($usuario->login($_POST['usuario'], $_POST['senha'])) {
        header("Location: ./form/index.php");
    }
}


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema Piloto Cidadão</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="form-signin" style="background: #42dea4;">
        <h2 class="text-center">Área restrita</h2>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($usuario->errors->hasError()) {
                echo $usuario->errors->toString();
            }
        }
        ?>
        <form method="POST">
            <!--<label>Usuário</label>-->
            <input type="text" name="usuario" placeholder="Digite o seu usuário" class="form-control"><br>

            <!--<label>Senha</label>-->
            <input type="password" name="senha" placeholder="Digite a sua senha" class="form-control"><br>

            <input type="submit" name="btnLogin" value="Acessar" class="btn btn-success btn-block">

            <div class="row text-center" style="margin-top: 20px;">
                <h4>Você ainda não possui uma conta?</h4>
                <a href="cadastrar.php">Crie grátis</a>
            </div>

        </form>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
