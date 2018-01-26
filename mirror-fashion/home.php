
    <?php 
        $reset = '<link rel = "stylesheet" href = "css/reset.css">';
        $cabecalho_css = '<link rel = "stylesheet" href = "css/estilos-home.css">';
        $cabecalho_css_mobile = '<link rel = "stylesheet" href = "css/mobile.css" media = "(max-width: 939px)">';
        $cabecalho_title = "Mirror Fashion";
        include("cabecalho.php"); 
    ?>

    <div class = "container destaque">

        <section class = "busca">
            
            <h2>Busca</h2>
            <form>
                <input type = "search">
                <input type = "image" src = "img/busca.png" class = "lupa">
            </form>
        
        </section>
        <section class = "departamentos">
            
            <h2>Departamentos</h2>
            <nav>
                <ul class = "menu-departamentos">
                    <li><a href = "#">Blusas e Camisas</a>
                        <ul>
                            <li><a href = "#">Manga Curta</a></li>
                            <li><a href = "#">Manga cumprida</a></li>
                            <li><a href = "#">Camisa social</a></li>
                            <li><a href = "#">Camisa casual</a></li>
                        </ul>
                    </li>
                    <li><a href = "#">Calças</a></li>
                    <li><a href = "#">Saias</a></li>
                    <li><a href = "#">Vestidos</a></li>
                    <li><a href = "#">Sapatos</a></li>
                    <li><a href = "#">Bolsas e Carteiras</a></li>
                    <li><a href = "#">Acessórios</a></li>
                </ul>
            </nav>
        
        </section>

        <img class = "img-destaque" src = "img/destaque-home.png" alt = "Promoção: Big City Nights">
    </div>

    <div class = "container paineis">

        <section class = "painel novidades">

            <h2>Novidades</h2>
            <ol>
                <li>
                    <a href="produto.php">
                        <figure>
                            <img src = "img/produtos/miniatura1.png">
                            <figcaption>Fuzz Cardigan por R$129,90</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.php">
                        <figure>
                            <img src = "img/produtos/miniatura1.png">
                            <figcaption>Fuzz Cardigan por R$129,90</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.php">
                        <figure>
                            <img src = "img/produtos/miniatura1.png">
                            <figcaption>Fuzz Cardigan por R$129,90</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.php">
                        <figure>
                            <img src = "img/produtos/miniatura1.png">
                            <figcaption>Fuzz Cardigan por R$129,90</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.php">
                        <figure>
                            <img src = "img/produtos/miniatura1.png">
                            <figcaption>Fuzz Cardigan por R$129,90</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.php">
                        <figure>
                            <img src = "img/produtos/miniatura1.png">
                            <figcaption>Fuzz Cardigan por R$129,90</figcaption>
                        </figure>
                    </a>
                </li>
            </ol>
        </section>
        <section class = "painel maisvendidos">

            <h2>Mais Vendidos</h2>
            <ol>
                <li>
                    <a href="produto.php">
                        <figure>
                            <img src = "img/produtos/miniatura1.png">
                            <figcaption>Fuzz Cardigan por R$129,90</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.php">
                        <figure>
                                <img src = "img/produtos/miniatura1.png">
                                <figcaption>Fuzz Cardigan por R$129,90</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.php">
                        <figure>
                                <img src = "img/produtos/miniatura1.png">
                                <figcaption>Fuzz Cardigan por R$129,90</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.php">
                        <figure>
                            <img src = "img/produtos/miniatura1.png">
                            <figcaption>Fuzz Cardigan por R$129,90</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.php">
                        <figure>
                                <img src = "img/produtos/miniatura1.png">
                                <figcaption>Fuzz Cardigan por R$129,90</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.php">
                        <figure>
                                <img src = "img/produtos/miniatura1.png">
                                <figcaption>Fuzz Cardigan por R$129,90</figcaption>
                        </figure>
                    </a>
                </li>
            </ol>
        </section>
    </div>

    <?php include("rodape.php"); ?>