<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/bootstrap-flatly.css">
    <link rel="stylesheet" href="./css/open-iconic.css">
    <title>Checkout Mirror Fashion</title>


    <style>
        .form-control:invalid{
            border: 1px solid #cc0000;
        }

        body {
            padding-top: 50px;
        }

        .nav-item {
            margin-left: 30px;
            float: left;
        }

        
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-ld navbar-light bg-light" fixed-top>
        <button class="navbar-toggler" type="button"
         data-toggle="collapse" data-target="#navbarToggleExternalContent">
         <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="index.html">Mirror Fashion</a>

        <div class="collapse navbar-collapse" id="navbarToggleExternalContent">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="sobre.html">Sobre</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">Ajuda</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">Perguntas frequentes</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">Entre em contato</a>
            </li>
        </ul>
    </nav>
</div>

    <!-- H1 E P que ja tinhamos, somente adicionar as respectivas classes-->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Ótima escolha!</h1>
            <p class="lead">
                Obrigado por comprar na Mirror Fashion!
                Preencha seus dados para efetivar a compra.
            </p>
            <div class="container">
                    
                <div class="card">
                    <div class="card mb-3">
                        <h2 class="card-header">
                            Sua compra
                        </h2>
                        <!--fim .card-header-->
                        <div class="card-body">
                            <img src="img/produtos/foto1-verde.png" alt="Fuzz Cardigan" class="img-thumbnail mb-3">

                            <dl>

                                <dt>Produto</dt>
                                <dd><?= $_POST['nome'] ?></dd>

                                <dt>Cor</dt>
                                <dd><?= $_POST['cor'] ?><dd>

                                <dt>Tamanho</dt>
                                <dd><?= $_POST['tamanho'] ?><dd>

                                <dt>Preco</dt>
                                <dd id="preco" >R$ 129.90</dd> 
                            </dl>
                        </div>
                    </div>
                </div>

                <form>
                    <fieldset>
                        <legend>Dados pessoais</legend>

                        <div class="form-group">
                            <label for="nome">Nome completo</label>
                            <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite seu nome: " autofocus
                            required> 
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="email@exemplo.com" >
                        </div>

                        <div class="form-group">
                            <label for="cpf">CPF</label>
                            <input type="text" class="form-control" name="cpf" id="cpf" placeholder="000.000.000 - 00" required
                            data-mask="9999 9999 9999 9999 - 999">
                        </div>

                        <div class="form-group custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="newslatter" value="sim" checked>
                            <label class="custom-control-label" for="newslatter">
                                Quero receber Newslatter da Mirror Fashion
                            </label>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>

                            <div class="form-group">
                                <label for="numero-cartao">Número - CVV</label>
                                <input type="text" class="form-control" name="numero-cartao" id="numero-cartao">
                            </div>

                            <div class="form-group">
                                <label for="bandeira-cartao">Bandeira</label>
                                <select class="custom-select" id="bandeira-cartao">
                                    <option disabled selected>Selecione uma opção...</option>
                                    <option value="master">Master</option>
                                    <option value="visa">Visa</option>
                                    <option value="amex">American Express</option>
                                </select>

                            </div>

                            <div class="form-group">
                                <label for="validade-cartao">Validade</label>
                                <input type="month" class="form-control" name="validade-cartao" 
                                id="validade-cartao">
                            </div>
                        </legend>
                    </fieldset>

                    <button type="submit" class="btn btn-primary btn-lg">
                        <span class="oi oi-thumb-up"></span>
                        Confirmar Pedido
                    </button>
                </form>
                <!--fim .card-body-->
            </div>
            <!--fim .card-->
        </div>
        <div class="row">
            <div class="cold-md-4 col-xl-3">

                <div class="form-group">
                    <label for="qtd">Quantidade</label>
                    <input type="number" id="qtd" min="1" max="99" value="1" class="form-control">
                </div>
    
                <div class="form-group">
                    <label for="total">Total:</label>
                    <output for="qtd preco" id="total" class="form-control">R$ 129.90</output>
                </div>
    
                

                <div class="card mb-3">
                    <!--inserir-->
                </div>
            </div>

            <form class="cold-md-8 col-xl-9">
                <!--inserir-->
            </form>

            <div class="row">
                <fieldset class="col-lg-6">
                    <!--inserir-->
                </fieldset>
                <fieldset class="col-lg-6">
                    
                </fieldset>

    
            </div>

            </div>
        </div><!-- Fim .container dentro do jumbotron-->
    </div><!-- fim .jumbotron-->

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/inputmask-plugin.js"></script>
    <script type="text/javascript" src="js/total.js"></script>
</body>

</html>