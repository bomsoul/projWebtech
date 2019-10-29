<?php

namespace Controller;

use \Core\QueryBuilder;

    class StudentGradeController{
        private $query;
        
        public function __construct(){
            $this->query = new QueryBuilder();
        }

        public function getItems($email){
            return $this->query->getItems($email);
        }

        public function getGrade($std_id) {
            return $this->query->getGrade($std_id);
        }
    }