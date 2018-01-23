<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php print @$reset; ?>
    <?php print @$cabecalho_css; ?>
    <?php print @$cabecalho_css_mobile;?>
    <link rel = "icon" href = "img/shopping-bag.png">
    <title><?php print $cabecalho_title; ?></title>
</head>
<body>
<header class = "container">

        <h1><img src = "img/logo.png" alt = "Mirror Fashion"></h1>

        
        <p class = "sacola">Nenhum item na sacola de Compras</p>
       

        <nav class = "menu-opcoes">
            <ul id = "menu">
                <li><a href = "#">Sua Conta</a></li>
                <li><a href = "#">Lista de Desejos</a></li>
                <li><a href = "#">Cartão Fidelidade</a></li>
                <li><a href = "sobre.php">Sobre</a></li>
                <li><a href = "#">Ajuda</a></li>
            </ul>
        </nav>
    </header>
</body>
</html>