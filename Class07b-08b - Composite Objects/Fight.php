<?php
    require_once './Fighter.php';

    class Fight {
        private $challenger;
        private $challenged;
        private $rounds;
        private $approved;

        public function scheduleFight($f1, $f2) {
            if ($f1->getCategory() === $f2->getCategory() and $f1 != $f2) {
                $this->setApproved(true);
                $this->setChallenger($f1);
                $this->setChallenged($f2);
            }
            else {
                $this->setApproved(false);
                $this->setChallenger(null);
                $this->setChallenged(null);
            }
        }

        public function Fight() {
            if ($this->getApproved()) {
                $this->getChallenged()->toPresent();
                $this->getChallenger()->toPresent();

                $winner = rand(0, 2);

                switch ($winner) {
                    case 0:
                        echo '<p>Tie!</p>';
                        $this->getChallenged()->tieFight();
                        $this->getChallenger()->tieFight();
                        break;
                        
                    case 1:
                        echo "<p>{$this->getChallenged()->getName()} won!</p>";
                        $this->getChallenged()->winFight();
                        $this->getChallenger()->loseFight();
                        break;
                        
                    case 2:
                        echo "<p>{$this->getChallenger()->getName()} won!</p>";
                        $this->getChallenged()->loseFight();
                        $this->getChallenger()->winFight();
                        break;
                }
            }
            else {
                echo '<p>Fight cannot happen</p>';
            }
        }

        function setChallenger($cha) { $this->challenger = $cha; }
        function getChallenger()     { return $this->challenger; }
        function setChallenged($cha) { $this->challenged = $cha; }
        function getChallenged()     { return $this->challenged; }
        function setRounds($rou)     { $this->rounds = $rou;     }
        function getRounds()         { return $this->rounds;     }
        function setApproved($app)   { $this->approved = $app;   }
        function getApproved()       { return $this->approved;   }
    }