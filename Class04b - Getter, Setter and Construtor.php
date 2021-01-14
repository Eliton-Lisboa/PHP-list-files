<pre>
<?php
    require './Classes/Pen03.php';

    $c1 = new Pen('BIC', 'Blue', 0.5);
    $c2 = new Pen('TRIS', 'Black', 0.2);

    print "I have a tip tip {$c1->getModel()} {$c1->getTip()} <br/><br/>";
    print_r($c1);
    print_r($c2);
