<?php

class Giochi extends Prodotti {
    //titolo
    //immagine
    //prezzo
    public $materiale;
    public $peso;
    public $animale;

    public function __construct($_titolo, $_immagine, $_prezzo, $_materiale, $_peso, Animale $_animale)
    {
        parent::__construct($_titolo, $_immagine, $_prezzo );
        $this->materiale = $_materiale;
        $this->peso = $_peso;
        $this->animale = $_animale;
    }
}