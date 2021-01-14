<?php
    require_once './interface.php';

    class RemoteControl implements Controller {
        private $volume;
        private $switchedOn;
        private $playing;

        public function __construct() {
            $this->volume = 25;
            $this->switchedOn = false;
            $this->playing = false;
        }

        private function getVolume()     { return $this->volume;     }
        private function getSwitchedOn() { return $this->switchedOn; }
        private function getPlaying()    { return $this->playing;    }

        private function setVolume($value)     { $this->volume = $value;     }
        private function setSwitchedOn($value) { $this->switchedOn = $value; }
        private function setPlaying($value)    { $this->playing = $value;    }

        function Turnon()  { $this->setSwitchedOn(true); }
        function Turnoff() { $this->setSwitchedOn(false); }

        function OpenMenu() {
            echo '<p><---- Menu ----></p>';
            echo '<br/>It\'s on?: '. ($this->getSwitchedOn() ? 'Yes' : 'No');
            echo '<br/>It\'s playing?: '. ($this->getPlaying() ? 'Yes' : 'No');
            echo '<br/>Volume: '. $this->getVolume(). '  ';
            for ($x = 0; $x < $this->getVolume(); $x += 10) {
                echo '|';
            }

            echo '<br/>';
        }

        function CloseMenu() { echo 'Closing menu...'; }

        function LessVolume() {
            if ($this->getSwitchedOn()) {
                $this->setVolume($this->getVolume() - 5);
            }
        }

        function MoreVolume() {
            if ($this->getSwitchedOn()) {
                $this->setVolume($this->getVolume() + 5);
            }
        }

        function Mute() {
            if ($this->getSwitchedOn()) {
                $this->setVolume(0);
            }
        }
        
        function MuteOff() {
            if ($this->getSwitchedOn() and $this->getVolume() == 0) {
                $this->setVolume(25);
            }
            
        }

        function Play() {
            if ($this->getSwitchedOn() and !$this->getPlaying()) {
                $this->setPlaying(true);
            }
        }
        
        function Pause() {
            if ($this->getSwitchedOn() and $this->getPlaying()) {
                $this->getPlaying(false);
            }

        }

    }