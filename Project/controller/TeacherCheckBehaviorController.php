<?php

namespace Controller;

use \Core\QueryBuilder;
    class TeacherCheckBehaviorController{
        private $query;
        
        public function __construct(){
            $this->query = new QueryBuilder();
        }
        
        public function getBhv($subid){
            return $this->query->getBhv($subid);
        }

        public function getAllBhv($mail){
            return $this->query->getAllBhv($mail);
        }

        public function getItem($mail){
            return $this->query->getItem($mail);
        }
}