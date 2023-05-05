<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-shop</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    require_once __DIR__ .'/Models/Prodotti.php';
    require_once __DIR__ .'/Models/Cibo.php';
    require_once __DIR__ .'/Models/Giochi.php';
    require_once __DIR__ .'/Models/Categorie.php';

    //CARD CIBO
    $prodottoCibo = new Prodotti ("Cibo", "", "");
    $cane = new Categorie("Cane");
    $cibo = new Cibo ("Crocchette","./image/crocchette.jpg",20,"22/10/2030","20kg", $cane);
    var_dump($cibo);

    //CARD GIOCHI
    $gatto = new Categorie("Gatto");
    $gomitolo = new Giochi("Gomitolo", "url", 10, "Lana", "200g", $gatto);
    var_dump($gomitolo);
    ?>
    <!-- PAGINA -->
    <div class="card cibo">
        <h1>
            <?php 
                echo $cibo->titolo;
            ?>
        </h1>
        <img src="<?php echo$cibo->immagine?>" alt="crocchette">
        <span>
            Prezzo:
            <?php
                echo $cibo->prezzo;
            ?>
        </span>
        <span>
            Categoria:
            <?php
                echo $cane->tipo;
            ?>
        </span>
        <span>
            Prodotto:
            <?php
                echo $prodottoCibo->titolo;
            ?>
        </span>
    </div>
</body>
</html>