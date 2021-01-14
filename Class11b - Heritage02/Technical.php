<?php
    require_once './Student.php';

    class Technical extends Student {
        private $professionalRecord;

        public function practice() {
            echo '<p>Practicing!</p>';
        }

        public function getProfissionalRecord()                    { return $this->professionalRecord; }
        public function setProfissionalRecord($professionalRecord) { $this->professionalRecord = $professionalRecord; }
    }