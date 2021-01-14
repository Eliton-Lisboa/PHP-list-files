<pre>
<?php
    require './Mammal.php';
    require './Wolf.php';
    require './Dog.php';

    $mammal = new Mammal;
    $mammal->sound();

    $wolf = new Wolf;
    $wolf->sound();

    $dog = new Dog;
    $dog->sound();
    $dog->toReactPhrase('Hello');
    $dog->toReactPhrase('Will catch');
    $dog->toReactTime(11, 45);
    $dog->toReactTime(21, 00);
    $dog->toReactOwner(true);
    $dog->toReactOwner(false);
    $dog->toReactAgeWeight(2, 12.5);
    $dog->toReactAgeWeight(17, 4.5);
