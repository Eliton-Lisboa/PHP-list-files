<?php
    require_once './Reptile.php';

    class Turtle extends Reptile {

        public function move() {
            echo '<p>Walking very slowly</p>';
        }

    }