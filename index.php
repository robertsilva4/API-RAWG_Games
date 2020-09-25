<?php
include_once ("card.php");
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
    <div class="container">
    <form method="post">
       <label>RAWG Video Game</label><br>
       <input type="text" placeholder="Digite o título" name="pesquisar"> 
       <input type="submit" value="Pesquisar">
   </form>
   <div class="row">
   <?php echo $card;?>
   </div>
   <form method="post">
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
</body>
</html>