<?php
    require_once './Person.php';

    class Teacher extends Person {
        private $specialty;
        private $salary;

        public function receiveRaise($raise) {
            $this->setSalary($this->getSalary() + $raise);
        }

        public function getSpecialty()           { return $this->specialty;       }
        public function setSpecialty($specialty) { $this->specialty = $specialty; }
        public function getSalary()              { return $this->salary;          }
        public function setSalary($salary)       { $this->salary = $salary;       }
    }