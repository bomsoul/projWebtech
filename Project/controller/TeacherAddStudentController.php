<?php 
    namespace Controller;

    use \Core\QueryBuilder;
    class TeacherAddStudentController{
        private $query;
        
        public function __construct(){
            $this->query = new QueryBuilder();
        }

        public function uploadStudent(){
            if($this->query->uploadStudent()){
                return true;
            }
            return false;
        }

        
        // public function uploadStudent(){
        //     if($this->query->uploadStudent()){
        //         return true;
        //     }
        //     return false;
        //     return $this->query->uploadStudent();
        // }

        public function getTeacherName($mail){
            return $this->query->getTeacherName($mail);
        }

        public function uploadBehavior($tname){
            return $this->query->uploadBehavior($tname);
        }
    }