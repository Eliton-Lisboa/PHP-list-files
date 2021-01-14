<pre>
<?php
    require './Mammal.php';
    require './Reptile.php';
    require './Fish.php';
    require './Bird.php';
    require './Kangaroo.php';
    require './Dog.php';
    require './Snake.php';
    require './Turtle.php';
    require './GoldFish.php';
    require './Macaw.php';

    $mammal = new Mammal;
    $mammal->move();
    $mammal->toFeed();
    $mammal->sound();

    $bird = new Bird;
    $bird->move();
    $bird->toFeed();
    $bird->sound();
    
    $reptile = new Reptile;
    $reptile->move();
    $reptile->toFeed();
    $reptile->sound();

    $fish = new Fish;
    $fish->move();
    $fish->toFeed();
    $fish->sound();

    $kangaroo = new kangaroo;
    $kangaroo->move();
    $kangaroo->toFeed();
    $kangaroo->sound();

    $dog = new Dog;
    $dog->move();
    $dog->toFeed();
    $dog->sound();

    $snake = new Snake;
    $snake->move();
    $snake->toFeed();
    $snake->sound();

    $turtle = new Turtle;
    $turtle->move();
    $turtle->toFeed();
    $turtle->sound();

    $goldfish = new GoldFish;
    $goldfish->move();
    $goldfish->toFeed();
    $goldfish->sound();

    $macaw = new Macaw;
    $macaw->move();
    $macaw->toFeed();
    $macaw->sound();
