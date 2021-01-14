<?php
    require_once './Video Actions.php';

    class Video implements Video_Actions {
        private $title;
        private $evaluation;
        private $views;
        private $likes;
        private $reproducing;

        public function __construct($title) {
            $this->title = $title;
            $this->evaluation = 1;
            $this->views = 1;
            $this->likes = 0;
            $this->reproducing = false;
        }

        public function play() {
            $this->setReproducing(true);
        }
        
        public function pause() {
            $this->setReproducing(false);
        }

        public function like() {
            $this->setLikes($this->getLikes() + 1);
        }

        public function getTitle()                   { return $this->title;               }
        public function setTitle($title)             { $this->title = $title;             }
        public function getEvaluation()              { return $this->evaluation;          }
        public function setEvaluation($evaluation)   {
            $media = ($this->evaluation + $evaluation) / $this->views;
            $this->evaluation = $media;
        }
        public function getViews()                   { return $this->views;               }
        public function setViews($views)             { $this->views = $views;             }
        public function getLikes()                   { return $this->likes;               }
        public function setLikes($likes)             { $this->likes = $likes;             }
        public function getReproducing()             { return $this->reproducing;         }
        public function setReproducing($reproducing) { $this->reproducing = $reproducing; }
    }