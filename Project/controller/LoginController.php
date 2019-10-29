<?php 

    namespace Controller;

    use \Core\QueryBuilder;
    class LoginController{
        private $query;

        public function __construct(){
            $this->query = new QueryBuilder();
        }

        public function checkLogin($username,$password){
            if($this->query->login($username,$password)){
                return true;
            }
            return false;
        }
    }