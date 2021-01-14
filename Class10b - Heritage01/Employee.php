<?php
    require_once './Person.php';

    class Employee extends Person {
        private $sector;
        private $working;

        public function changeWork() {
            $this->setWorking(!$this->getWorking());
        }

        public function getSector()          { return $this->sector;      }
        public function setSector($sector)   { $this->sector = $sector;   }
        public function getWorking()         { return $this->working;     }
        public function setWorking($working) { $this->working = $working; }
    }