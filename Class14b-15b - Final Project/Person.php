<?php

    abstract class Person {
        protected $name;
        protected $age;
        protected $sex;
        protected $experience;

        public function __construct($name, $age, $sex) {
            $this->setName($name);
            $this->setAge($age);
            $this->setSex($sex);
            $this->setExperience(0);
        }

        protected function gainExperience($experience) {
            $this->setExperience($this->getExperience() + $experience);
        }

        public function getName()                  { return $this->name;              }
        public function setName($name)             { $this->name = $name;             }
        public function getAge()                   { return $this->age;               }
        public function setAge($age)               { $this->age = $age;               }
        public function getSex()                   { return $this->sex;               }
        public function setSex($sex)               { $this->sex = $sex;               }
        public function getExperience()            { return $this->experience;        }
        public function setExperience($experience) { $this->experience = $experience; }

    }