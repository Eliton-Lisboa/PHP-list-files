<?php
    require_once './Mammal.php';

    class Kangaroo extends Mammal {
        
        public function usePurse() {
            echo '<p>Using purse</p>';
        }
        
        public function move() {
            echo '<p>jumping...</p>';
        }

    }