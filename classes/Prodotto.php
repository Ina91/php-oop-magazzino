<?php
  class Book {
    public $codiceArticolo;
    public $title;
    public $anno_pubblicazione;
    public $prezzo;

    public function __construct($_codiceArticolo, $_title, $_anno_pubblicazione) {
      $this->codiceArticolo = $_codiceArticolo;
      $this->title = $_title;
      $this->anno_pubblicazione = $_anno_pubblicazione;

    }

    public function calcolaSconto() {
      if (empty($this->prezzo)) {
        die('nessun prezzo inserito');
      }
      return $this->prezzo - ($this->prezzo * 0.20) . ' euro';
    }
  }
