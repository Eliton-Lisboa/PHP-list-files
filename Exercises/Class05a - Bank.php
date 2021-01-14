<?php
    class ContaBanco {
        public $numberCount;
        protected $type;
        private $owner;
        private $balance;
        private $status;

        public function openAccount($type) {
            $this->setType($type);
            $this->setStatus(true);

            if ($type == 'CC') {
                $this->setBalance(50);
            }
            else if ($type == 'CP'){
                $this->setBalance(150);
            }
        }

        public function closeAccount() {
            if ($this->getBalance() > 0) {
                echo 'Account with money';
            }
            else if ($this->getBalance() < 0) {
                echo 'Debit account';
            }
            else {
                $this->setStatus(false);
            }
        }

        public function toDeposit($dep) {
            if ($this->getStatus()) {
                $this->setBalance($this->getBalance() + $dep);
            }
            else {
                echo 'Unable to deposit';
            }
        }

        public function toWithdraw($saq) {
            if ($this->getStatus()) {
                if ($this->getBalance() > $saq) {
                    $this->setBalance($this->getBalance() - $saq);
                }
                else {
                    echo 'Insufficient balance';
                }
            }
            else {
                echo 'Impossible to withdraw';
            }
        }

        public function payMonthlyFee() {
            $valor = 0;

            if ($this->getType() == 'CC') {
                $valor = 12;
            }
            else if ($this->getType() == 'CP') {
                $valor = 20;
            }

            if ($this->getStatus()) {
                if ($this->getBalance() > $valor) {
                    $this->setBalance($this->getBalance() - $valor);
                }
                else {
                    echo 'Insufficient balance';
                }
            }
            else {
                echo 'Unable to pay';
            }
        }


        public function getnumberCount() {
            return $this->numberCount;
        }

        public function setnumberCount($num) {
            $this->numberCount = $num;
        }

        public function getType() {
            return $this->type;
        }

        public function setType($type) {
            $this->type = $type;
        }

        public function getOwner() {
            return $this->owner;
        }

        public function setOwner($owner) {
            $this->owner = $owner;
        }

        public function getBalance() {
            return $this->balance;
        }

        public function setBalance($b) {
            $this->balance = $b;
        }

        public function getStatus() {
            return $this->status;
        }

        public function setStatus($status) {
            $this->status = $status;
        }

        public function __construct()
        {
            $this->status = false;
            $this->balance = 0;
        }

    }