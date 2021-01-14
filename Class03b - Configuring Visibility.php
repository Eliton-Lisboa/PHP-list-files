<pre>
<?php
    require './Classes/Pen02.php';

    $c1 = new Pen;
    $c1->model = 'Cristal BIC';
    $c1->color = 'Blue';
    // $c1->tip = 0.5;
    // $c1->load = 99;
    // $c1->capped = true;

    var_dump($c1);

    $c1->scribble();
    $c1->uncapped();
