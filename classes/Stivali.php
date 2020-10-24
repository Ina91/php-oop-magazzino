<?php
require_once 'Prodotto.php';
class Stivali extends Prodotto {
    public $nSerie;
    public $modello;
    public function __construct($_marca, $_tipo,$_modello,$_giacenza){
        parent::__construct($_marca, $_tipo,$_giacenza); // eredita da classe padre e aggiungo il modello
        $this->modello= $_modello;
    }

}
