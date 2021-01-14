<?php
    require_once './Animal.php';

    class Reptile extends Animal {
        private $scaleColor;

        public function move() {
            echo '<p>Crawling</p>';
        }

        public function toFeed() {
            echo '<p>Eating vegetables...</p>';
        }
        
        public function sound() {
            echo '<p>Reptile sound</p>';
        }

        public function getScaleColor()            { return $this->scaleColor;        }
        public function setScaleColor($scaleColor) { $this->scaleColor = $scaleColor; }
    }