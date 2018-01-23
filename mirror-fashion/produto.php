
<?php 
    $reset = '<link rel = "stylesheet" href = "css/reset.css">';
    $cabecalho_css = '<link rel = "stylesheet" href = "css/estilos-home.css">';
    $cabecalho_css_mobile = '<link rel = "stylesheet" href = "css/mobile.css" media = "(max-width: 939px)">';
    $cabecalho_title = "Produto";
    include("cabecalho.php");
?>
<div class = "produto">
    <h1>Fuzzy Cardigan</h1>
    <p>por apenas R$129,90</p>
    <form>
        <fieldset class = "cores">
            <legend>Escolha a cor:</legend>
            <input type = "radio" name = "cor" value = "verde" id = "verde" checked>
            <label for = "verde">
                <img src = "img/produtos/foto2-verde.png" alt = "verde">
            </label>

            <input type = "radio" name = "cor" value = "rosa" id = "rosa" checked>
            <label for = "rosa">
                <img src = "img/produtos/foto2-rosa.png" alt = "rosa">
            </label>

            <input type = "radio" name = "cor" value = "azul" id = "azul" checked>
            <label for = "azul">
                <img src = "img/produtos/foto2-azul.png" alt = "azul">
            </label>

        </fieldset>

        <input type = "submit" class = "comprar" value = "Comprar">
    </form>
<?php include("rodape.php");?>
