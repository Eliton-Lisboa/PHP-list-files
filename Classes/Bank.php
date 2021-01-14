<?php
    class BankAccount {
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
                echo '<p>Account with money</p>';
            }
            else if ($this->getBalance() < 0) {
                echo '<p>Debit account</p>';
            }
            else {
                $this->setStatus(false);
                echo "<p>{$this->getOwner()} account closed successfully</p>";
            }
        }

        public function toDeposit($dep) {
            if ($this->getStatus()) {
                $this->setBalance($this->getBalance() + $dep);
                echo "<p>Deposit of R$ $dep in {$this->getOwner()} account</p>";
            }
            else {
                echo '<p>Unable to deposit</p>';
            }
        }

        public function toWithdraw($saq) {
            if ($this->getStatus()) {
                if ($this->getBalance() >= $saq) {
                    $this->setBalance($this->getBalance() - $saq);
                    echo "<p>Withdrawal of R$ $saq authorized in the {$this->getOwner()} account</p>";
                }
                else {
                    echo '<p>Balance insuficiente</p>';
                }
            }
            else {
                echo '<p>Impossible to withdraw</p>';
            }
        }

        public function payMonthlyFee() {
            $value = 0;

            if ($this->getType() == 'CC') {
                $value = 12;
            }
            else if ($this->getType() == 'CP') {
                $value = 20;
            }

            if ($this->getStatus()) {
                if ($this->getBalance() > $value) {
                    $this->setBalance($this->getBalance() - $value);
                    echo "<p>R$ $value monthly fee charged to the {$this->getOwner()} account</p>";
                }
                else {
                    echo '<p>Balance insuficiente</p>';
                }
            }
            else {
                echo '<p>Unable to pay</p>';
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

        public function setType($t) {
            $this->type = $t;
        }

        public function getOwner() {
            return $this->owner;
        }

        public function setOwner($o) {
            $this->owner = $o;
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

        public function setStatus($s) {
            $this->status = $s;
        }

        public function __construct()
        {
            $this->setStatus(false);
            $this->setBalance(0);

            echo '<p>Account successfully created!</p>';
        }

    }