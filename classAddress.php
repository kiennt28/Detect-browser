<?php 
    class Address {
        private $latitude;
        private $longitude;

        public function __construct($latitude, $longitude) {
            $this->latitude = $latitude;
            $this->longitude = $longitude;
        }

        public function getFirstName() {
            return $this->first_name;
        }

        public function getLastName() {
            return $this->last_name;
        }

        public function getAge() {
            return $this->age;
        }
    }
?>