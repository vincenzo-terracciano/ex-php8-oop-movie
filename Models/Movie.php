<?php 

    class Movie {

        use HasDirector;

        public $title;
        public $cover;
        public $release_year;
        public $rating;
        public $description;
        protected Genre $genre;

        public function __construct($_title, $_cover, $_release_year, $_rating, Genre $_genre, $_description = null) {
            
            $this->title = $_title;
            $this->cover = $_cover;
            $this->release_year = $_release_year;
            $this->rating = $_rating;
            $this->genre = $_genre;
            $this->description = $_description;

        }

        public function getGenreName() {
            return $this->genre->getName();
        }

    }

?>