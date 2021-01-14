<pre>
<?php
    require '../Classes/phone.php';

    $cellphone1 = new Cellphone;
    $cellphone1->cover = false;
    $cellphone1->filme = true;
    $cellphone1->brand = 'Asus';
    $cellphone1->model = 'ZenPhone L2';
    $cellphone1->os = 'Android 8';
    $cellphone1->color = 'Preto';
    $cellphone1->turnon();

    var_dump($cellphone1);

    $cellphone2 = new Cellphone;
    $cellphone2->cover = true;
    $cellphone2->filme = true;
    $cellphone2->brand = 'Samsung';
    $cellphone2->model = 'Galaxy j7 new prime';
    $cellphone2->os = 'Android 6';
    $cellphone2->color = 'Ouro';
    $cellphone2->turnoff();

    var_dump($cellphone2);
?>