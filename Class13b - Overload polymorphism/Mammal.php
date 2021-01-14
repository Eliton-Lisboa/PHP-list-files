<?php
    require_once './Animal.php';

    class Mammal extends Animal {
        protected $hairColor;

        public function sound() {
            echo '<p>Mammal sound</p>';
        }

        public function get()           { return $this->hairColor;       }
        public function set($hairColor) { $this->hairColor = $hairColor; }
    }