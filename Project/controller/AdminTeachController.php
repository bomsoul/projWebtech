<?php
    namespace Controller;

    use \Core\QueryBuilder;
    
    class AdminTeachController{
        private $query;

        public function __construct(){
            $this->query = new QueryBuilder();
        }

        public function checkMail($mail){
            if($this->query->checkMail($mail)){
                return true;
            }
            return false;
        }

        public function addTeacher($code,$name,$faculty,$department,$mail){
            if($this->query->addTeacher($code,$name,$faculty,$department,$mail)){
                return true;
            }
            return false;
        }

    }