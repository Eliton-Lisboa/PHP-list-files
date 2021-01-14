<?php

    abstract class Animal {
        protected $weight;
        protected $age;
        protected $members;

        public abstract function sound();

        public function getWeight()          { return $this->weight;      }
        public function setWeight($weight)   { $this->weight = $weight;   }
        public function getAge()             { return $this->age;         }
        public function setAge($age)         { $this->age = $age;         }
        public function getMembers()         { return $this->members;     }
        public function setMembers($members) { $this->members = $members; }
    }