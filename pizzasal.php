<style>
    .principal{
        width: 100%;
        height: 100%;
        background-image: url(img/backgroung-cardapio.jpg);
        color: white;
        
    }

</style>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzaria</title>
    <!-- CSS/ JS -->
    <?php
    include_once('inc/css.php');
    include_once('inc/js.php');
    ?>
    <!-- /CSS/ JS -->
</head>
<body>
<div class="container">
<!-- topo -->
    <?php include_once('inc/topo.php') ?>
<!-- /topo -->
<!-- principal -->
<div class="principal">     
    <h1> <br> Pizzas Salgadas <br> <br></h1>
    <h2>-Queijo<br> -Calabresa<br> -Frango<br> -Carne<br> -Camarão<br> -Portuguesa<br> </h2>
     

</div>
<!-- /principal -->
<!-- rodape -->
    <?php include_once('inc/rodape.php')?>  
<!-- /rodape -->
</div>

</body>
</html>