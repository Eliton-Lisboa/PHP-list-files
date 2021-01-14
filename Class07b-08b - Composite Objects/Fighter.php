<?php
    class Fighter {
        private $name;
        private $nationality;
        private $age, $height, $weight;
        private $category, $victories, $defeats, $ties;
        
        function toPresent() {
            echo '<p>-------------------------------</p>';
            echo "<br/><p>IT'S TIME! The fighter {$this->getName()} <br/>";
            echo "came directly from {$this->getNationality()}, <br/>";
            echo "have {$this->getAge()} years and weighs {$this->getWeight()} Kg, <br/>";
            echo "<br/>he has {$this->getVictories()} victories, <br/>";
            echo "{$this->getDefeats()} defeats and {$this->getTies()} ties</p>";
        }

        function status() {
            echo '<p>-------------------------------</p>';
            echo "<br/><p>{$this->getName()} it's a weight {$this->getCategory()} <br/>";
            echo "and already won {$this->getVictories()} times, <br/>";
            echo "lost {$this->getDefeats()} times and <br/>";
            echo "tied {$this->getTies()} times!</p>";
        }

        function winFight()  { $this->setVictories($this->getVictories() + 1); }
        function loseFight() { $this->setDefeats($this->getDefeats() + 1);     }
        function tieFight()  { $this->setTies($this->getTies() + 1);           }

        function __construct($nam, $nat, $age, $hei, $wei, $vic, $def, $tie) {
            $this->name = $nam;
            $this->nationality = $nat;
            $this->age = $age;
            $this->hei = $age;
            $this->height = $hei;
            $this->setWeight($wei);
            $this->victories = $vic;
            $this->defeats = $def;
            $this->ties = $tie;
        }


        function setName($nam)        { $this->name = $nam;        }
        function getName()            { return $this->name;        }
        function setNationality($nat) { $this->nationality = $nat; }
        function getNationality()     { return $this->nationality; }
        function setAge($age)         { $this->age = $age;         }
        function getAge()             { return $this->age;         }
        function setHeight($hei)      { $this->height = $hei;      }
        function getHeight()          { return $this->height;      }
        function setWeight($wei)      {
            $this->weight = $wei;
            $this->setCategory();
        }
        function getWeight()          { return $this->weight;      }
        private function setCategory()        {
            if ($this->weight < 52.2) {
                $this->category = 'Invalid';
            }
            else if ($this->weight <= 70.3) {
                $this->category = 'light';
            }
            else if ($this->weight <= 83.9) {
                $this->category = 'medium';
            }
            else if ($this->weight <= 120.2) {
                $this->category = 'heavy';
            }
            else {
                $this->category = 'Invalid';
            }
        }
        function getCategory()        { return $this->category;    }
        function setVictories($vic)   { $this->victories = $vic;   }
        function getVictories()       { return $this->victories;   }
        function setDefeats($def)     { $this->defeats = $def;     }
        function getDefeats()         { return $this->defeats;     }
        function setTies($tie)        { $this->ties = $tie;        }
        function getTies()            { return $this->ties;        }
    }