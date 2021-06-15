<?php
include("config.php");

use App\Classes\Usuario;

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $usuario          = new Usuario();
    $usuario->nome    = $_POST['nome'];
    $usuario->email   = $_POST['email'];
    $usuario->usuario = $_POST['usuario'];
    $usuario->senha   = $_POST['senha'];

    if ($usuario->save()) {
        $usuario->saveDataToSession();
        header("Location: form/index.php");
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cidadão - Cadastrar</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="form-signin" style="background: #42dea4;">
        <h2>Cadastrar Usuário</h2>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            echo $usuario->registrationMessage();
        }
        ?>

        <form method="POST" action="">
            <!--<label>Nome</label>-->
            <input type="text" name="nome" value="<?php echo $_POST['nome'] ?? ''; ?>"
                   placeholder="Digite o nome e o sobrenome" class="form-control"><br>

            <!--<label>E-mail</label>-->
            <input type="text" name="email" placeholder="Digite o seu e-mail"
                   value="<?php echo $_POST['email'] ?? ''; ?>" class="form-control"><br>

            <!--<label>Usuário</label>-->
            <input type="text" name="usuario" placeholder="Digite o usuário" class="form-control"
                   value="<?php echo $_POST['usuario'] ?? ''; ?>"><br>

            <!--<label>Senha</label>-->
            <input type="password" name="senha" placeholder="Digite a senha" class="form-control"><br>

            <input type="submit" name="btnCadUsuario" value="Cadastrar" class="btn btn-success"><br><br>

            <div class="row text-center" style="margin-top: 20px;">
                Lembrou? <a href="login.php">Clique aqui</a> para logar
            </div>
        </form>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
