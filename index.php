<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=PT+Sans|Bad+Script">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="estilos.css">

    <title>Mirror Fashion</title>
</head>

<body>
    <header class="container">
        <!--[if lt IE 9]>
        <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]
        -->

        <h1><img src="img/logo.png" alt="Logo da Mirror Fashion"></h1>

        <p class="sacola">
            Nenhum item na sacola de compras
        </p>

        <nav class="menu-opcoes">
            <ul>
                <li><a href="#">Sua Conta</a></li>
                <li><a href="#">Lista de Desejos</a></li>
                <li><a href="#">Cartão Fidelidade</a></li>
                <li><a href="sobre.php">Sobre</a></li>
                <li><a href="#">Ajuda</a></li>
            </ul>
        </nav>
    </header>

    <div id="main">

    </div>

    <!--<div id="destaques">
    </div-->


    <div class="container destaque">
        <section class="busca">
            <h2>Busca</h2>

            <form>
                <input type="search">
                <button>&#128269;</button>
            </form>
        </section>
        <!--Fim .Busca-->

        <section class="menu-departamentos">
            <h2>Departamentos</h2>
            <nav>
                <ul>
                    <li><a href="#">Blusas e Camisas</a>
                        <ul>
                            <li><a href="#">Manga curta</a></li>
                            <li><a href="#">Manga comprida</a></li>
                        <li><a href=" #">Camisa social</a></li>
                            <li><a href="#">Camisa casual</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Calças</a></li>
                    <li><a href="#">Saias</a></li>
                    <li><a href="#">Vestidos</a></li>
                    <li><a href="#">Sapatos</a></li>
                    <li><a href="#">Bolsas e Carteiras</a></li>
                    <li><a href="#">Acessórios</a></li>
                </ul>
            </nav>
        </section>
        <!--Fim .menu-departamentos-->

        <section class="banner-destaque">
            <figure>
                <img src="img/destaque-home.png" alt="Promoção: Big City Night">
            </figure>
            <a href="#" class="pause"></a>
        </section>

        <!--Fim .banner-destaque-->
    </div>
    <!--Fim .container .destaques-->

    <div class="container paineis">
        
        <section class="painel novidades painel-aberto">
            <h2>Novidades</h2>
            <ol>
            <?php
					$conexao = mysqli_connect("127.0.0.1","root","","WD43");
					$dados = mysqli_query($conexao, "SELECT * FROM produtos ORDER BY data DESC LIMIT 0,12");
					
					while ($produto = mysqli_fetch_array($dados)):
				?>

			<li>
				<a href="produto.php?id=<?= $produto['id'] ?> ">
					<figure>
						<img src="img/produtos/miniatura<?= $produto['id'] ?>.png" alt="<?= $produto['nome'] ?> ">
						<figcaption><?= $produto['nome'] ?> por <?= $produto['preco'] ?> </figcaption>
					</figure>
				</a>
			</li>

		<?php endwhile; ?>
            </ol>
            <button type="button">Mostrar mais</button>
        </section>

        <section class="painel mais-vendidos">
            <h2>Mais Vendidos</h2>
            <ol>
               <?php
					$conexao = mysqli_connect("127.0.0.1","root","","WD43");
					$dados = mysqli_query($conexao, "SELECT * FROM produtos ORDER BY data ASC LIMIT 0,12");
					
					while ($produto = mysqli_fetch_array($dados)):
				?>

			<li>
				<a href="produto.php?id=<?= $produto['id'] ?> ">
					<figure>
						<img src="img/produtos/miniatura<?= $produto['id'] ?>.png" alt="<?= $produto['nome'] ?> ">
						<figcaption><?= $produto['nome'] ?> por <?= $produto['preco'] ?> </figcaption>
					</figure>
				</a>
			</li>

		<?php endwhile; ?>

            </ol>
            <button type="button">Mostrar mais</button>
        </section>
    </div>

    <!--fim .container .paineis-->
    <footer>
        <div class="container">
            <img src="img/logo-rodape.png" alt="Logo da mirror fashion"/>

            <ul class="social">
                <li><a href="https://facebook.com/mirrorfashion">Facebook</a></li>
                <li><a href="https://twitter.com/mirrorfashion">Twitter</a></li>
                <li><a href="https://plus.google.com/mirrorfashion">Google+</a></li>
            </ul>
        </div>
    </footer>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/home.js"></script>
    <script type="text/javascript" src="js/banner.js"></script>

</body>
</html>