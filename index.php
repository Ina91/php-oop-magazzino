<?php

require_once 'classes/Prodotto.php';

$h_g = new Book('BJH857575','Hunger Games  ','2009');
$h_g->prezzo = '20';
echo $h_g->calcolaSconto();
