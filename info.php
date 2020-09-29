<?php
include_once("rel.php");
$card = getUrl($id);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="api.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="bg-dark">
        <header>
            <nav class="nav nav-pills justify-content-center">
                <a class="nav-link" href="index.php">Home</a>
                <a class="nav-link" href="jogos.php">Jogos</a>
                <a class="nav-link" href="#">Link</a>
            </nav>
        </header>
    </div>
    <div class="bg-secondary">
        <div class="container">
            <div class="row p-3">
                <?php echo $card ?>
            </div>
        </div>
    </div>
</body>

</html>