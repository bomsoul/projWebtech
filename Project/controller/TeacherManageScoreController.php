<?php 
    namespace Controller;

    use \Core\QueryBuilder;
    class TeacherManageScoreController{
        private $query;
        
        public function __construct(){
            $this->query = new QueryBuilder();
        }

        public function uploadScore(){
            if($this->query->uploadScore()){
                return true;
            }
            return false;
        }

     
    }