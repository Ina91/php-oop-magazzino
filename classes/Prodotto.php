<?php

//proprietà dei prodotti
class Prodotto {
    public $marca;
    public $tipo;
    public $taglia;
    public $prezzo;
    private $scaffale;
    private $giacenza;

    //costruttore
    public function __construct($_marca, $_tipo,$_giacenza){
        $this->marca = $_marca;
        $this->tipo = $_tipo;
        $this->giacenza =$_giacenza;

    }

//metodi
    // public function setPosition($_scaffale){
    //     $this->scaffale->scaffale;
    // }
    //
    // public function getPosition(){
    //     if (empty($this->scaffale)){
    //         die('non hai inserito lo scaffale');
    //     }
    //     return $this->scaffale;
    // }

    public function calcoloPrezzo(){
        if (empty($this->prezzo)) {
            die('non hai inserito il prezzo');
        }
        return $this->prezzo -($this->prezzo*0.10).' euro' ;
    }





};
