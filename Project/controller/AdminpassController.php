<?php 
    namespace Controller;

    use \Core\QueryBuilder;
    class AdminpassController{
        private $query;

        public function __construct(){
            $this->query = new QueryBuilder();
        }

        public function checkOldPass($password){
            if($this->query->checkOldPass($password)){
                return true;
            }
            return false;
        }

        public function changePass($password){
            if($this->query->changePass($password)){
                return true;
            }
            return false;
        }
    }