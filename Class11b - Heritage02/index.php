<pre>
<?php
    require './Visitor.php';
    require './Student.php';
    require './Scholarship.php';
    require './Teacher.php';
    require './Technical.php';

    // $person1 = new Person;
    $visitor1 = new Visitor;
    $visitor1->setName('Juvenal');
    $visitor1->setAge(44);
    $visitor1->setSex('Male');

    $student1 = new Student;
    $student1->setName('Pedro');
    $student1->setSubscription(1111);
    $student1->setAge(16);
    $student1->setSex('Male');
    $student1->setCourse('Computing');
    $student1->payMonthlyFee();

    $scholarship1 = new Scholarship;
    $scholarship1->setSubscription(1112);
    $scholarship1->setName('Jubileu');
    $scholarship1->setBag(12.5);
    $scholarship1->setCourse('Administration');
    $scholarship1->setAge(17);
    $scholarship1->setSex('Male');
    $scholarship1->payMonthlyFee();

    $teacher1 = new Teacher;
    $teacher1->setName('Jorge');
    $teacher1->setAge(53);
    $teacher1->setSex('Male');
    $teacher1->setSpecialty('Mathematics');
    $teacher1->setSalary(1550.12);

    $technical1 = new Technical;
    $technical1->setName('Jessica');
    $technical1->setAge(22);
    $technical1->setSex('Female');
    $technical1->setProfissionalRecord('Informatics');
    $technical1->setCourse('C#');
    $technical1->setSubscription(11113);

    print_r($visitor1);
    print_r($student1);
    print_r($scholarship1);
    print_r($teacher1);
    print_r($technical1);