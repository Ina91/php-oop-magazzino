<!-- Crea e modella classi, a piacere, per gestire i prodotti di un magazzino. -->
<?php

require_once 'classes/Prodotto.php';
require_once 'classes/Stivali.php';

$prodotto = new Prodotto('geox','stivali',2);
var_dump($prodotto);
$prodotto->prezzo = '190';

echo $prodotto->calcoloPrezzo();

$stivali = new Stivali ('geox','stivali','trochetto',38); //istanza ogg stivali
var_dump($stivali);
 // $stivali->setPosition('1B');
 // echo $stivali->getPosition();

$stivali->prezzo = '200';

echo $stivali->calcoloPrezzo();
