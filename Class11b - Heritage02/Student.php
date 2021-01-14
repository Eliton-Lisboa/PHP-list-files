<?php
    require_once './Person.php';

    class Student extends Person {
        private $subscription;
        private $course;

        public function payMonthlyFee() {
            echo "<p>Paying tuition for student {$this->getName()}</p>";
        }

        public function getSubscription()              { return $this->subscription;          }
        public function setSubscription($subscription) { $this->subscription = $subscription; }
        public function getCourse()                    { return $this->course;                }
        public function setCourse($course)             { $this->course = $course;             }
    }