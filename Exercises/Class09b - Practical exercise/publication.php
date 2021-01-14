<?php

    interface Publication {
        public function Open();
        public function Close();
        public function Leaf($page);
        public function NextPage();
        public function BackPage();
    }