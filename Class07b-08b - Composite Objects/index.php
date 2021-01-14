<pre>
<?php
    require './Fighter.php';
    echo 'teste';
    require './Fight.php';
    echo 'teste';
    
    $f = array();
    $f[0] = new Fighter('Pretty Boy', 'France'   , 30, 1.75, 68.9 , 11, 2, 1);
    $f[1] = new Fighter('PutsScript', 'Brasil'   , 29, 1.68, 57.8 , 14, 2, 3);
    $f[2] = new Fighter('SnapShadow', 'EUA'      , 35, 1.65, 80.9 , 12, 2, 1);
    $f[3] = new Fighter('Dead Code' , 'Austrália', 28, 1.93, 81.6 , 13, 0, 2);
    $f[4] = new Fighter('UFOCobol'  , 'Brasil'   , 37, 1.70, 119.3, 5 , 4, 3);
    $f[5] = new Fighter('Nerdaart'  , 'EUA'      , 30, 1.81, 105.7, 12, 2, 4);

    $UEC01 = new Fight;
    $UEC01->scheduleFight($f[0], $f[1]);
    $UEC01->Fight();

    $f[0]->Status();
    $f[1]->Status();