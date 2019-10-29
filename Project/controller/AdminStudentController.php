<?php 
    namespace Controller;

    use \Core\QueryBuilder;
    class AdminStudentController{
        private $query;
        
        public function __construct(){
            $this->query = new QueryBuilder();
        }

        public function uploadToServer(){
            if($this->query->uploadToServer()){
                return true;
            }
            return false;
        }
    }