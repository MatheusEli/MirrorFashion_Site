<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Checkout Mirror Fashion</title>
</head>
<body>
<h1>Ótima Escolha!</h1>
<p>Obrigado por comprar na Mirror Fashion!
Preencha seus dados para efetivar a compra.</p>

<h2>Sua compra</h2>
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
    
</body>
</html>