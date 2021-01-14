<?php
    require_once './Person.php';

    class Grasshopper extends Person {
        private $login;
        private $totalAssisted;

        public function __construct($name, $age, $sex, $login) {
            parent::__construct($name, $age, $sex); # construtor da progenitora
            $this->setLogin($login);
            $this->setTotalAssisted(0);
        }

        public function seeOneMore() {
            $this->setTotalAssisted($this->getTotalAssisted() + 1);
        }

        public function getLogin()                       { return $this->login;                   }
        public function setLogin($login)                 { $this->login = $login;                 }
        public function getTotalAssisted()               { return $this->totalAssisted;           }
        public function setTotalAssisted($totalAssisted) { $this->totalAssisted = $totalAssisted; }
    }