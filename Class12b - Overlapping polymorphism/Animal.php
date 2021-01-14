<?php

    abstract class Animal {
        private $weight;
        private $age;
        private $members;

        abstract function move();
        abstract function toFeed();
        abstract function sound();

        public function getWeight()          { return $this->weight;      }
        public function setWeight($weight)   { $this->weight = $weight;   }
        public function getAge()             { return $this->age;         }
        public function setAge($age)         { $this->age = $age;         }
        public function getMembers()         { return $this->members;     }
        public function setMembers($members) { $this->members = $members; }
    }