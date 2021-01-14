<?php
    require_once './Video.php';
    require_once './Grasshopper.php';

    class Preview {
        private $spectator;
        private $movie;

        public function __construct($spectator, $movie) {
            $this->setSpectator($spectator);
            $this->setMovie($movie);
        }

        public function toEvaluate() {
            $this->movie->setEvaluation(5);
        }
        
        public function rateGrade($note) {
            $this->movie->setEvaluation($note);
        }
        
        public function evaluatePercentage($percentage) {
            $note = 0;
            if ($percentage <= 20) {
                $note = 3;
            }
            else if ($percentage<= 50) {
                $note = 5;
            }
            else if ($percentage >= 90) {
                $note = 8;
            }
            else {
                $note = 10;
            }

            $this->movie->setEvaluation($note);
        }

        public function getSpectator()           { return $this->spectator;       }
        public function setSpectator($spectator) { $this->spectator = $spectator; }
        public function getMovie()               { return $this->movie;           }
        public function setMovie($movie)         { $this->movie = $movie;         }
    }