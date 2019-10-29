<?php 
    namespace Controller;

    use \Core\QueryBuilder;
    class TeacherManageGradeController{
        private $query;
        
        public function __construct(){
            $this->query = new QueryBuilder();
        }

        public function uploadGrade(){
            if($this->query->uploadGrade()){
                return true;
            }
            return false;
        }

     
    }