<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="produto.css">
    <title>Mirror Fashion</title>
</head>

<body>
    <header class="container">
        <h1>
            <img src="img/logo.png" alt="logo da Mirror Fashion">
        </h1>

        <p class="sacola">
            Nenhum item na sacola de compras
        </p>

        <nav class="menu-opcoes">
            <ul>
                <li><a href="#">Sua Conta</a></li>
                <li><a href="#">Lista de Desejos</a></li>
                <li><a href="#">Cartão Fidelidade</a></li>
                <li><a href="sobre.html">Sobre</a></li>
                <li><a href="#">Ajuda</a></li>
            </ul>
        </nav>
    </header>

    <!--Adcionar o conteudo da pagina-->
<div class="produto-back">
<div class="container">
    <div class="produto">
        <h1>Fuzz Cardigan</h1>
        <p>por apenas R$ 129,90</p>

        <form action="checkout.php" method="POST">
        <input type="hidden" name="nome" value="Fuzzy Cardigan">
        <input type="hidden" name="preco" value="129,00">
        <input type="hidden" name="id" value="<?= $produto['id'] ?>">
            <fieldset class="cores">
                <legend>Escolha a cor:</legend>

                <input type="radio" name="cor" value="verde" id="verde" checked>
                <label for="verde">
                    <img src="img/produtos/foto1-verde.png" alt="produto da cor verde"> 
                </label>

                <input type="radio" name="cor"  value="rosa" id="rosa">
                <label for="rosa">
                    <img src="img/produtos/foto1-rosa.png" alt="produto da cor rosa">
                </label>

                <input type="radio" name="cor" value="azul" id="azul">
                <label for="azul">
                    <img src="img/produtos/foto1-azul.png" alt="produto da cor azul">
                </label>
            </fieldset>

            <fieldset class="tamanhos">
                <legend>Escolha o tamanho:</legend>

                <input type="range" min="36" max="46" value="42" step="2" name="tamanho" id="tamanho">
                <output for="tamanho" name="valortamanho">42</output>
            </fieldset>

            <button class="comprar">Comprar</button>

            
        </form>

        <div class="detalhes">
            <h2>Detalhes do produto</h2>

            <p>
                Esse é o melhor casaco de Cardigã que você já viu. Execelente
                material italiano com estampa desenhada pelos artesãos da
                comunidade de Krotor nas ilhas gregas. Compre já e receba hoje
                mesmo pela nossa entrega a jata.
            </p>

            <table>
                <thead>
                    <tr>
                        <th>Característica</th>
                        <th>Detalhe</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Modelo</td>
                        <td>Cardigã 7845</td>
                    </tr>

                    <tr>
                        <td>Material</td>
                        <td>Algodão e poliester</td>
                    </tr>

                    <tr>
                        <td>Cores</td>
                        <td>Azul, Rosa e Verde</td>
                    </tr>

                    <tr>
                        <td>Lavagem</td>
                        <td>Lavar a mão</td>
                    </tr>
                </tbody>

            </table>
        </div>
    </div>
</div>
</div>

    <?php include("rodape.php"); ?>


    <script type="text/javascript" src="js/produto.js"></script>
</body>

</html>