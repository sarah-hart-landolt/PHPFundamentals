<?php

    class Person
    {
        const AVG_LIFE_SPAN = 79;

        protected $firstName;
        protected $lastName;
        protected $yearBorn;
        
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
        protected $penName = "Mark Twain";

        public function getPenName()
        {
            return $this->penName.PHP_EOL;
        }

        public function getCompleteName()
        {
            return $this->firstName . " " . $this->lastName . " a.k.a. " . $this->penName . PHP_EOL;
        }
    }

    $newAuthor = new Author("Samuel Langhorne", "Clemens", 1899);

    // echo $newAuthor->penName;
    // echo $newAuthor->getFullName();
    echo $newAuthor->getCompleteName();

?>