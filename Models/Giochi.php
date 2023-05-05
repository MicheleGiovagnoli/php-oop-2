<?php

class Giochi extends Prodotti {
    //titolo
    //immagine
    //prezzo
    public $materiale;
    public $peso;
    public $categoria;

    public function __construct($_titolo, $_immagine, $_prezzo, $_materiale, $_peso, Categorie $_categoria)
    {
        parent::__construct($_titolo, $_immagine, $_prezzo );
        $this->materiale = $_materiale;
        $this->peso = $_peso;
        $this->categoria = $_categoria;
    }
}