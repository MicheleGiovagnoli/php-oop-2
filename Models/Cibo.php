<?php

class Cibo extends Prodotti {
    //titolo
    //immagine
    //prezzo
    public $data_scadenza;
    public $peso;
    public $animale;

    public function __construct($_titolo, $_immagine, $_prezzo, $_data_scadenza, $_peso, Animale $_animale)
    {
        parent::__construct($_titolo, $_immagine, $_prezzo );
        $this->data_scadenza = $_data_scadenza;
        $this->peso = $_peso;
        $this->animale = $_animale;
    }
}