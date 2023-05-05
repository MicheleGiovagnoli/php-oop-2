<?php

class Prodotti {
    public $titolo;
    public $immagine;
    public $prezzo;

    public function __construct($_titolo, $_immagine, $_prezzo)
    {
        $this->titolo = $_titolo;
        $this->immagine = $_immagine;
        $this->prezzo = $_prezzo;
    }
}