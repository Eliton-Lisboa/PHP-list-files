<?php
    require_once './Animal.php';

    class Fish extends Animal {
        private $scaleColor;

        public function move() {
            echo '<p>Swimming</p>';
        }

        public function toFeed() {
            echo '<p>Eating substances...</p>';
        }
        
        public function sound() {
            echo '<p>Fish makes no sound</p>';
        }
        
        public function dropBubble() {
            echo '<p>blew a bubble</p>';
        }

        public function getScaleColor()            { return $this->scaleColor;        }
        public function setScaleColor($scaleColor) { $this->scaleColor = $scaleColor; }
    }