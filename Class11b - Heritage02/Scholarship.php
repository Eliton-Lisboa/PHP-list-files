<?php
    require_once './Student.php';

    class Scholarship extends Student {
        private $bag;

        public function renewBag() {
            echo '<p>Renewed scholarship!</p>';
        }

        public function payMonthlyFee() {
            echo "<p>{$this->getName()} is scholarship! then pay with a discount!</p>";
        }

        public function getBag()     { return $this->bag; }
        public function setBag($bag) { $this->bag = $bag; }
    }