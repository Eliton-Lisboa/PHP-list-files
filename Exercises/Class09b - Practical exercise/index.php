<pre>
<?php
    require './person.php';
    require './book.php';

    $person[0] = new Person('Pedro', 22, 'Masculino');
    $person[1] = new Person('Maria', 31, 'Feminino');

    $book[0] = new Book('Basic PHP', 'José da Silva', 300, $person[0]);
    $book[1] = new Book('OOP with PHP', 'Maria de souza', 500, $person[0]);
    $book[2] = new Book('Advanced PHP', 'Ana paula', 800, $person[1]);

    print_r($book[0]);
    $book[0]->Open();
    $book[0]->Leaf(500);
    $book[0]->details();