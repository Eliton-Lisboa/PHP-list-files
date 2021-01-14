<?php
    require_once './Person.php';

    class Student extends Person {
        private $subscription;
        private $course;
        
        public function cancelSubscription() {
            echo '<p>Registration will be canceled!</p>';
        }

        public function getSubscription()              { return $this->subscription;          }
        public function setSubscription($subscription) { $this->subscription = $subscription; }
        public function getCourse()                    { return $this->course; }
        public function setCourse($course)             { $this->course = $course; }

    }