<?php
    require_once './Animal.php';

    class Mammal extends Animal {
        private $hairColor;

        public function move() {
            echo '<p>Running</p>';
        }

        public function toFeed() {
            echo '<p>Suction...</p>';
        }
        
        public function sound() {
            echo '<p>Mammal sound</p>';
        }

        public function getHairColor()           { return $this->hairColor;       }
        public function setHairColor($hairColor) { $this->hairColor = $hairColor; }
    }