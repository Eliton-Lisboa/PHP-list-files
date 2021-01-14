<pre>
<?php
    require './Video.php';
    require './Grasshopper.php';
    require './Preview.php';

    $video[0] = new Video('PHP Course OOP 06');
    $video[1] = new Video('PHP Course 12');
    $video[2] = new Video('HTML5 Course 26');

    $grasshopper[0] = new Grasshopper('Eliton', 15, 'Not found', 'Eliton-Lisboa');
    $grasshopper[1] = new Grasshopper('undefined', 127, 'Male', 'undefined-null');

    $preview[0] = new Preview($grasshopper[0], $video[0]);
    $preview[0]->toEvaluate();
    
    $preview[1] = new Preview($grasshopper[1], $video[2]);
    $preview[1]->evaluatePercentage(85);

    // print_r($video);
    // print_r($grasshopper);
    print_r($preview);
