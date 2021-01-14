<?php
    class Pen {
        private $model;
        private $tip;
        private $capped;
        private $color;

        public function __construct($m, $c, $t)
        {
            $this->model = $m;
            $this->color = $c;
            $this->tip = $t;
            $this->capped();
        }

        public function capped() {
            $this->capped = true;
        }

        public function getModel() {
            return $this->model;
        }

        public function setModel($m) {
            $this->model = $m;
        }

        public function getTip() {
            return $this->tip;
        }

        public function setTip($t) {
            $this->tip = $t;
        }

    }