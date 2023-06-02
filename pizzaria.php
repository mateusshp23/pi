<style>
    /* imagem */
    .principal {
        width: 100%;
        height: 100%;
        background-image: url(img/background-pizza.jpg);
        background-repeat: repeat 3;
    };
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
    <style>
    /* texto */
    .branca5{
        margin-top: 300px;
        text-align: center;
        color:  white !important;
        font-size: 1em !important;
        font-family:'Dancing Script', cursive;
    }
    .text {
        margin-top: 300px;
        text-align: center;
        font-size: 1em !important;
        color: white !important;
    }    

</style>
</head>
<body>

<div class="container">
<!-- topo -->
    <?php include_once('inc/topo.php') ?>
<!-- /topo -->
<!-- principal -->     
    <div class="principal">
        <h1 class="text">venha conhecer <br><span class="branca5">Pizzaria BOSS</span><br>a melhor de SP</h1>
    </div>
<!-- /principal -->
<!-- rodape -->
    <div>
        <?php include_once('inc/rodape.php')?>
    </div>
<!-- /rodape -->
</div>

</body>
</html>