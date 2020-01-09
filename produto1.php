<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="estilos.css">
    
    <title>Produto Mirror Fashion</title>
</head>
<body>
    <?php
    $cabechalho_title = "Produto da Mirror Fashion";
    include("cabecalho.php"); ?>

    <!--Conteudo da pagina-->
    <form action="checkout.php" method="POST">
    <input type="hidden" name="nome" value="Fuzzy Cardigan">
    <input type="hidden" name="preco" value="129,00">

    </form>
    
    <?php include("rodape.php"); ?>

    
</body>
</html>