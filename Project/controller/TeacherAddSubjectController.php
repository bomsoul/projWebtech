<?php

    namespace Controller;

    use \Core\QueryBuilder;
    class TeacherAddSubjectController{
        private $query;
        
        public function __construct(){
            $this->query = new QueryBuilder();
        }
        public function addSubJect($code,$name,$credit,$semester){
            if($this->query->addSubJect($code,$name,$credit,$semester)){
                return true;
            }
            return false;
        }
    }