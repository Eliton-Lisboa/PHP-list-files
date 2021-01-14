<?php
    class Pen {
        var $model;
        var $color;
        var $tip;
        var $load;
        var $capped;

        function scribble() {
            if ($this->capped) {
                echo '<p>MISTAKE! I can\'t scribble!</p>';
            }
            else {
                echo '<p>I\'m doodling ...</p>';
            }

        }

        function capped() {
            $this->capped = true;
        }
        
        function uncapped() {
            $this->capped = false;
        }
    }