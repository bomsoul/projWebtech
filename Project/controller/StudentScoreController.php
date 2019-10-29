<?php

namespace Controller;

use \Core\QueryBuilder;

    class StudentScoreController{
        private $query;
        
        public function __construct(){
            $this->query = new QueryBuilder();
        }

        public function getItems($email){
            return $this->query->getItems($email);
        }

        public function getScore($std_id) {
            return $this->query->getScore($std_id);
        }
    }