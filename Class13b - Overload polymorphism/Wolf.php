<?php
    require_once './Mammal.php';

    class Wolf extends Mammal {

        public function sound() {
            echo '<p>Auuuuuuuu!</p>';
        }

    }