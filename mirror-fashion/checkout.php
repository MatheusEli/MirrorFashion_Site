<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel = "stylesheet" href = "css/bootstrap.css">
    <link rel = "icon" href = "img/shopping-bag.png">
    <title>Checkout Mirror Fashion</title>

    <style>
    
    .form-control:invalid{
        border: 1px solid #cc0000;
    }
    .navbar{

        margin: 0;
    }

    </style>
</head>
<body>
<nav class= "navbar navbar-default navbar-static-top">
    <div class = "navbar-header">
    <button type = "button" class = "navbar-toggle collapsed" data-toggle = "collapse" data-target = "#navbar-collapse-id">
        <span class = "icon-bar"></span>
        <span class = "icon-bar"></span>
        <span class = "icon-bar"></span>
    </button>
    <a class = "navbar-brand" href = "home.php">Mirror Fashion</a>
    </div>
        <div class = "collapse navbar-collapse" id = "navbar-collapse-id">
            <ul class = "nav navbar-nav">
                <li class = "active"><a href = "sobre.php">Sobre</a></li>
                <li><a href = "#">Ajuda</a></li>
                <li><a href = "#">Perguntas Frequentes</a></li>
                <li><a href = "#">Entre em Contato</a></li>
            </ul>
        </div>
    </nav>
<div class = "jumbotron">
    <div class = "container">
        <h1>Ótima Escolha!</h1>
        <p>Obrigado por comprar na Mirror Fashion!
        Preencha seus dados para efetivar a compra.</p>
    </div>
</div>

<div class = "container">
<div class = "row">
    <div class = "col-sm-4 col-lg-3">
        <div class = "panel panel-default">
            <div class = "panel-heading">
            <h2 class = "panel-title">Sua compra</h2>
            </div>
            <div class = "panel-body">
                
                <img src = "img/produtos/foto1-<?= $_POST['cor'] ?>.png" class = "img-thumbnail img-responsive">
                <dl>
                <dt>Cor</dt>
                <dd><?= $_POST['cor'] ?></dd>
                
                <dt>Tamanho</dt>
                <dd><?= $_POST['tamanho'] ?></dd>
                
                <dt>Produto</dt>
                <dd><?= $_POST['nome'] ?></dd>
                
                <dt>Preço</dt>
                <dd><?= $_POST['preco'] ?></dd>
                </dl>
                
            </div>
        </div>
    </div>

    <div class = "col-sm-8 col-lg-9">
        <form>
        <div class = "row">
            <fieldset class = "col-md-6">
                <legend>Dados Pessoais</legend>
                
                <div class = "form-group">
                    <label for = "nome">Nome Completo</label>
                    <input type = "text" class = "form-control" id = "nome" name = "nome" autofocus required>
                </div>
                
                <div class = "form-group">
                    <label for = "email">Email</label>
                    <div class = "input-group">
                        <span class = "input-group-addon">@</span>
                        <input type = "email" class = "form-control" id = "email" name = "email" placeholder = "email@exemplo.com">
                    </div>
                </div>
                
                <div class = "form-group">
                    <label for = "cpf">CPF</label>
                    <input type = "text" class = "form-control" id = "cpf" name = "cpf" placeholder = "000.000.000-00" required>
                </div>
                
                <div class = "checkbox">
                    <label>
                        <input type = "checkbox" value = "sim" name = "spam" checked>
                        Quero receber spam da Mirror Fashion
                    </label>
                </div>
                </fieldset>
                
                <fieldset class = "col-md-6">
                <legend>Dados do Cartão</legend>
                
                <div class = "form-group">
                    <label for = "numero-cartao">Número - CVV</label>
                    <input type = "text" class = "form-control" id = "numero-cartao" name = "numero-cartao">
                </div>
                
                <div class = "form-group">
                    <label for = "bandeira-cartao">Bandeira</label>
                    <select name = "bandeira-cartao" id = "bandeira-cartao" class = "form-control">
                        <option value = "master">MasterCard</option>
                        <option value = "visa">VISA</option>
                        <option value = "amex">American Express</option>
                    </select>
                </div>
                
                <div class = "form-group">
                    <label for = "validade-cartao">Validade</label>
                    <input type = "month" class = "form-control" id = "validade-cartao" name = "validade-cartao">
                </div>
            </fieldset>
        </div>
            <button type = "submit" class = "btn btn-primary">
                <span class = "glyphicon glyphicon-thumbs-up btn-lg pull-right"></span>
                Confirmar Pedido
            </button>
        </form>
        </div>
    </div>
</div>
<script src = "js/jquery.js"></script>
<script src = "js/bootstrap.js"></script>
</body>
</html>