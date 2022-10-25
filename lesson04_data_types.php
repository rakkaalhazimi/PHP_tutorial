<?php
    $name = "Rakka Alhazimi"; // string
    $age = 20; // integer
    $gpa = 3.56; // float
    $isGood = true; // boolean
    $awards = array("best student", "high ranker"); // array
    $girlfriends = null; // null

    // Object
    class Student {
        public $name;
        public $age;
        public $gpa;
        public function __construct($name, $age, $gpa) {
            $this -> name = $name;
            $this -> age = $age;
            $this -> gpa = $gpa;
        }
    }

    $myStudent = new Student($name, $age, $gpa);
?>