<style>
    /* imagem */
    .principal {
        width: 100%;
        height: 100%;
        background-image: url(img/background-pizza.jpg);
        background-repeat: no-repeat;
        color: white;
    };

    /* texto */
    h1 {
        font-size: 5em;
        color: white;    
    };

    h2 {
        font-size: 30px;
        color: white;
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
</head>
<body>
<div class="container">
<!-- topo -->
    <?php include_once('inc/topo.php') ?>
<!-- /topo -->
<!-- principal -->
<div class="principal">     
    <h1> <br> Sobre Nós <br> <br></h1>
    <h2>Desde a criaçao, o desejo é que nossos clientes pudessem degustar o melhor da gastronomia italiana, somado a um excelente atendimento e preços justos.

Toda a preparação é feita em nossas cozinhas, seguindo rigidamente receitas pensadas e elaboradas, como nossos saborosos tomates secos, torta holandesa na taça entre muitos outros produtos feitos especialmente para você, cliente Verace. Para nós alta gastronomia nunca será sinônimo de altos preços e sim de muito prazer à mesa. Estamos preparados para atendê-los em três frentes: o delivery, que já conta com o apoio de mais de 20 entregadores e uma equipe treinada para oferecer o melhor atendimento a você. O salão que contempla um espaço aconchegante e harmonioso, aliado a garçons simpáticos e competentes. Por fim, temos também o sistema de pizza em casa, no qual a Verace vai até o local que você escolher levando toda nossa estrutura para uma inesquecível festa com pizza. Nós da Verace buscamos incansavelmente formas de supreender você.</h2>
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