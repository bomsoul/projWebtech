<?php 
    namespace Controller;

    use \Core\QueryBuilder;
    class AdminSubController{
        private $query;
        
        public function __construct(){
            $this->query = new QueryBuilder();
        }
        
        public function findName(){
            return $this->query->findName();
        }

        public function findSub(){
            return $this->query->findSub();
        }

        public function addCourse($name,$preq,$sec,$tname){
            return $this->query->addCourse($name,$preq,$sec,$tname);
        }
    }