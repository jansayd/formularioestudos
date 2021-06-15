<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Criar pagina com abas</title>
    <link href="../css/bootstrap.css" rel="stylesheet">
</head>
<body>

@include('layout.navbar')

<div class="container-fluid " role="main">
    <h3>@yield('title')</h3>
    <div class="alert hide" id="msg" role="alert">...</div>
    @yield('content')

</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.inputmask.min.js"></script>
<script src="../js/jquery.maskMoney.min.js"></script>
@yield('js')
</body>
</html>
