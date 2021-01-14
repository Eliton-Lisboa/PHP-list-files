<?php
    class Pen {
        public $model;
        public $color;
        private $tip;
        protected $load;
        protected $capped;

        public function scribble() {
            if ($this->capped) {
                echo '<p>MISTAKE! I can\'t scribble!</p>';
            }
            else {
                echo '<p>I\'m doodling ...</p>';
            }

        }

        public function capped() {
            $this->capped = true;
        }
        
        public function uncapped() {
            $this->capped = false;
        }

    }