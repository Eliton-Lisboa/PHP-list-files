<?php

    class Person {
        private $name;
        private $age;
        private $sex;

        public function makeBirthday() {
            $this->setAge($this->getAge() + 1);
        }

        public function getName()      { return $this->name;  }
        public function setName($name) { $this->name = $name; }
        public function getAge()       { return $this->age;   }
        public function setAge($age)   { $this->age = $age;   }
        public function getSex()       { return $this->sex;   }
        public function setSex($sex)   { $this->sex = $sex;   }
    }