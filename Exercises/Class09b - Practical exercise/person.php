<?php

    class Person {
        private $name;
        private $age;
        private $sex;

        function makeBirthday() {
            $this->setAge($this->getAge() + 1);
        }

        function __construct($name, $age, $sex) {
            $this->name = $name;
            $this->age = $age;
            $this->sex = $sex;
        }

        function getName()      { return $this->name;  }
        function setName($name) { $this->name = $name; }
        function getAge()       { return $this->age;   }
        function setAge($age)   { $this->age = $age;   }
        function getSex()       { return $this->sex;   }
        function setSex($sex)   { $this->sex = $sex;   }
    }