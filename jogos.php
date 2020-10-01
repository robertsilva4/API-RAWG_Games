<?php
include_once("card.php");
$card = getCard();
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogos</title>
    <link rel="stylesheet" href="api.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="bg-dark">
        <header>
            <nav class="nav nav-pills justify-content-center">
                <a class="nav-link" href="index.php">Home</a>
                <a class="nav-link active" href="jogos.php">Jogos</a>
                <a class="nav-link" href="#">Contato</a>
            </nav>
        </header>
    </div>
    <div class="bg-secondary">
        <div class="container">
            <form class="form-inline justify-content-center p-3 my-2 my-lg-0" method="post">
                <input class="form-control mr-sm-2" type="text" placeholder="Digite o título" aria-label="Search" name="pesquisar">
                <input class="btn btn-success my-2 my-sm-0" type="submit" value="Pesquisar">
            </form>
            <div class="row">
                <div class="col-12">
                </div>
            </div>
            <div class="row">
                <?php echo $card; ?>
            </div>
            <div class="row">
                <form class="p-2" method="post">
                    <input type="submit" value="1" name="pagina">
                    <input type="submit" value="2" name="pagina">
                    <input type="submit" value="3" name="pagina">
                    <input type="submit" value="4" name="pagina">
                    <input type="submit" value="5" name="pagina">
                    <input type="submit" value="6" name="pagina">
                    <input type="submit" value="7" name="pagina">
                    <input type="submit" value="8" name="pagina">
                    <input type="submit" value="9" name="pagina">
                </form>
            </div>
        </div>
    </div>
</body>

</html>