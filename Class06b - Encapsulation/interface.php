<?php

    interface Controller {
        public function Turnon();
        public function Turnoff();
        public function OpenMenu();
        public function CloseMenu();
        public function LessVolume();
        public function MoreVolume();
        public function Mute();
        public function MuteOff();
        public function Play();
        public function Pause();
    }