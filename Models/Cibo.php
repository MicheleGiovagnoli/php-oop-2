<?php

class Cibo extends Prodotti {
    //titolo
    //immagine
    //prezzo
    public $data_scadenza;
    public $peso;
    public $categoria;

    public function __construct($_titolo, $_immagine, $_prezzo, $_data_scadenza, $_peso, Categorie $_categoria)
    {
        parent::__construct($_titolo, $_immagine, $_prezzo );
        $this->data_scadenza = $_data_scadenza;
        $this->peso = $_peso;
        $this->categoria = $_categoria;
    }
}