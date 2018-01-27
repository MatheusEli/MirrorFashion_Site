<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel = "stylesheet" href = "css/bootstrap.css">
    <title>Checkout Mirror Fashion</title>
</head>
<body>
<div class = "jumbotron">
    <div class = "container">
        <h1>Ótima Escolha!</h1>
        <p>Obrigado por comprar na Mirror Fashion!
        Preencha seus dados para efetivar a compra.</p>
    </div>
</div>

<div class = "container">
    <div class = "panel panel-default">
        <div class = "panel-heading">
            <h2 class = "panel-title">Sua compra</h2>
        </div>
        <div class = "panel-body">
            
            <img src = "img/produtos/foto2-<?= $_POST['cor'] ?>.png" class = "img-thumbnail img-responsive">
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
</body>
</html>