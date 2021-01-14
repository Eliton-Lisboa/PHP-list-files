<?php
    require_once './Animal.php';

    class Bird extends Animal {
        private $featherColor;

        public function move() {
            echo '<p>Flying</p>';
        }

        public function toFeed() {
            echo '<p>Eating fruits...</p>';
        }
        
        public function sound() {
            echo '<p>Bird sound</p>';
        }
        
        public function makeNest() {
            echo '<p>Making a nest</p>';
        }

        public function getFeatherColor()              { return $this->featherColor;          }
        public function setFeatherColor($featherColor) { $this->featherColor = $featherColor; }
    }