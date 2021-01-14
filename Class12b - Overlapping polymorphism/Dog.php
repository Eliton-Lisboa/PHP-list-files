<?php
    require_once './Mammal.php';

    class Dog extends Mammal {

        public function buriesBone() {
            echo '<p>Burying bone</p>';
        }
        
        public function wagTail() {
            echo '<p>Wagging tail</p>';
        }

        public function sound() {
            echo '<p>Au! Au! Au!</p>';
        }

    }