<?php

require_once __DIR__ .'/Models/Prodotti.php';
require_once __DIR__ .'/Models/Cibo.php';
require_once __DIR__ .'/Models/Giochi.php';
require_once __DIR__ .'/Models/Animale.php';

//CLASSE PADRE
$prodotti = new Prodotti("Cibo","url","prezzo");
var_dump($prodotti);

//CARD CIBO
$cane = new Animale("Cane");
$cibo = new Cibo ("Crocchette","url",20,"22/10/2030","20kg", $cane);
var_dump($cibo);

//CARD GIOCHI
$gatto = new Animale("Gatto");
$gomitolo = new Giochi("Gomitolo", "url", 10, "Lana", "200g", $gatto);
var_dump($gomitolo);