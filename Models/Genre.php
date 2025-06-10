<?php 

    class Genre {

        protected $name;
        protected $description;

        // define the constructor with instance variables 
        public function __construct($_name, $_description) {

            $this->name = $_name;
            $this->description = $_description;

        }

        // create the function to read movies genre
        public function getName() {
            return $this->name;
        }

    }

?>