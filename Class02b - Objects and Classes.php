<pre>
<?php
    require './Classes/Pen01.php';

    $c1 = new Pen;
    $c1->color = 'Blue';
    $c1->tip = 0.5;
    $c1->capped = false;
    $c1->capped();
    $c1->scribble();
    
    var_dump($c1);
    
    $c2 = new Pen;
    $c2->color = 'Green';
    $c2->load = 50;
    $c2->capped();

    var_dump($c2);
