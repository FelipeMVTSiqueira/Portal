<!-- Felipe: libere a sua criatividade. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <?php include_once("padrao/header.php") ?>   
    <nav class="container d-flex justify-content-center mt-3" style="height: 60vh;">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><h3>Clique aqui e selecione a praia mais próxima!</h3></a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="riviera.php">Riviera</a>
                            <a class="dropdown-item" href="barradouna.php">Barra do Una</a>
                            <a class="dropdown-item" href="juquehy.php">Juquehy</a>
                            <a class="dropdown-item" href="baleia.php">Baleia</a>
                            <a class="dropdown-item" href="maresias.php">Maresias</a>
                            <a class="dropdown-item" href="pauba.php">Paúba</a>
                            <a class="dropdown-item" href="guaeca.php">Quaecá</a>
                        </div>
</nav>
    <?php include_once("padrao/footer.php") ?>   
</body>
</html>