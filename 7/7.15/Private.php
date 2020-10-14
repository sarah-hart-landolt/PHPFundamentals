<?php

    class Person
    {
        const AVG_LIFE_SPAN = 79;

        private $firstName;
        private $lastName;
        private $yearBorn;
        
        function __construct($tempFirst = "", $tempLast = "", $tempBorn = "")
        {
            $this->firstName = $tempFirst;
            $this->lastName = $tempLast;
            $this->yearBorn = $tempBorn;
        } 

        public function getFirstName()
        {
            return $this->firstName . PHP_EOL;
        }

        public function setFirstName($tempName)
        {
            $this->firstName = $tempName;
        }

        protected function getFullName()
        {
            return $this->firstName . " " . $this->lastName . PHP_EOL;
        }
    }

    class Author extends Person
    {
        private $penName = "Mark Twain";

        public function getPenName()
        {
            return $this->penName.PHP_EOL;
        }

        public function getCompleteName()
        {
            return $this->getFullName() . " a.k.a. " . $this->penName . PHP_EOL;
        }
    }

    $newAuthor = new Author("Samuel Langhorne", "Clemens", 1899);

    echo $newAuthor->getCompleteName();

?>