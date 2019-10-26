<!-- header padrão para todas as outras páginas do portal.-->
<!-- Falta aumentar um pouco o tamanho do campo de busca, e melhorar a posição da navbar, deixano o logo como um aside ao lado das duas linhas do header.-->

<?php include_once("config/variaveis.php") ?>
<body>
<a href="index.php"><section class="d-flex justify-content-center align-items-center mb-3">
                <img src="imagens/Logo_white.png" class="img-fluid" style="position: absolute; height: 30%;" alt="foto de capa">
                <img src="imagens/capapa.png" class="img-fluid">
            </section></a>
            <div class="container-fluid p-0 mb-4">
            <div class="d-flex shadow-sm mt-3 px-2">
                <a href="index.php"><img src="imagens/Logo_degrade.png" class="justify-content-start mr-5 mb-2 pl-2" style="height: 50px;"></a>
                <input type="text" class="form-control" style="width: fill; align-self-center;" data-type="search" placeholder="Procurar no Portal do Surf">
                <form class="form-inline">
                    <button class="btn btn-primary ml-3 mb-4" type="submit">Busca</button>
                </form>
                <div class=container style="width: 300px;" >
                <nav class="d-flex justify-content-end">
                    <ul class="nav">
                    <?php if(isset($usuario) && $usuario != []) {?>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Olá <?php echo $usuario["nome"]; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sair</a>
                    </li>
                    <?php } else { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="paginaLogin.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cadastroUsuario.php">Cadastro</a>
                    </li>
                    <?php } ?>
                    </ul>
                </nav>
                        </div>
            </div>
            <nav >
                <ul class="nav justify-content-between shadow-sm">
                <li class="nav-item">
                        <a class="nav-link dropdown-toggle pr-0 mr-0" href="previsao.php" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="imagens/previcon.png" class="p-1" style="width: 45px; height: 45px;">Previsão</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="previsao.php">PREVISAO</a>
                            <a class="dropdown-item" href="riviera.php">Riviera</a>
                            <a class="dropdown-item" href="barradouna.php">Barra do Una</a>
                            <a class="dropdown-item" href="juquehy.php">Juquehy</a>
                            <a class="dropdown-item" href="baleia.php">Baleia</a>
                            <a class="dropdown-item" href="maresias.php">Maresias</a>
                            <a class="dropdown-item" href="pauba.php">Paúba</a>
                            <a class="dropdown-item" href="guaeca.php">Quaecá</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="caronas.php"><img src="imagens/caronicon.png" class="p-2" style="width: 45px; height: 45px;">Carona</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="desapego.php"><img src="imagens/desapicon.png" class="p-2" style="width: 45px; height: 45px;">Desapego</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="encontre.php"><img src="imagens/encontricon.png" class="p-2" style="width: 45px; height: 45px;">Encontre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.php"><img src="imagens/blogicon.png" class="p-2" style="width: 45px; height: 45px;">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="noticias.php"><img src="imagens/noticon.png" class="p-2" style="width: 45px; height: 45px;">Notícias</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" style="width: 180px;" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="imagens/linkon.svg" class="p-2" style="width: 45px; height: 45px;">Links</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" target=_blank href="https://www.isasurf.org/">ISA</a>
                            <a class="dropdown-item" target=_blank href="https://www.worldsurfleague.com/">World Surf League</a>
                            <a class="dropdown-item" target=_blank href="http://wsllatinamerica.com/">WSL Latin America</a>
                            <a class="dropdown-item" target=_blank href="http://www.abrasp.com/">ABRASP</a>
                            <a class="dropdown-item" target=_blank href="https://magicseaweed.com/">Magic Sea Weed</a>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>