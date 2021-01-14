<?php
    class Cellphone {
        var $cover;
        var $filme;
        var $brand;
        var $model;
        var $os;
        var $color;

        function turnon() {
            echo 'Calling cell...<br/>';
        }
        
        function turnoff() {
            echo 'Turning off cell phone...<br/>';
        }
    }