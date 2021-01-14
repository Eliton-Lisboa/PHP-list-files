<?php
    require_once './Wolf.php';

    class Dog extends Wolf {
        
        public function sound() {
            echo '<p>Au! Au! Au!</p>';
        }

        public function toReactPhrase($phrase) {
            if ($phrase == 'Take food' || $phrase == 'Hello') {
                echo '<p>Shake and bark</p>';
            }
            else {
                echo '<p>Growling</p>';
            }
        }
        
        public function toReactTime($hour, $minute) {
            if ($hour < 12) {
                echo '<p>Shake</p>';
            }
            else if ($hour >= 18) {
                echo '<p>Ignore</p>';
            }
            else {
                echo '<p>Shake and bark</p>';
            }
        }
        
        public function toReactOwner($owner) {
            if ($owner) {
                echo '<p>Shake</p>';
            }
            else {
                echo '<p>Growling and barking</p>';
            }
        }
        
        public function toReactAgeWeight($age, $weight) {
            if ($age < 5) {
                if ($weight < 10) {
                    echo '<p>Shake</p>';
                }
                else {
                    echo '<p>Growling</p>';
                }

            }
            else {
                if ($weight < 10) {
                    echo '<p>Barking</p>';
                }
                else {
                    echo '<p>Ignore</p>';
                }

            }
        }

    }