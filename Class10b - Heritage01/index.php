<pre>
<?php
    require './Person.php';
    require './Student.php';
    require './Teacher.php';
    require './Employee.php';

    $person1 = new Person();
    $person2 = new Student();
    $person3 = new Teacher();
    $person4 = new Employee();

    $person1->setName('Pedro');
    $person1->setAge(15);
    $person1->setSex('Male');
    // $person1->receiveRaise(550.20);
    
    $person2->setName('Maria');
    $person2->setAge(17);
    $person2->setCourse('Computing');
    $person2->setSex('Female');
    // $person2->changeWork();
    
    $person3->setName('Claúdio');
    $person3->setAge(42);
    $person3->setSalary(2500.75);
    $person3->setSex('Male');
    
    $person4->setName('Fabiana');
    $person4->setAge(31);
    $person4->setSector('Stock');
    $person4->setSex('Female');
    // $person4->cancelSubscription();

    print_r($person1);
    print_r($person2);
    print_r($person3);
    print_r($person4);