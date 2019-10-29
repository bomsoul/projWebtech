<?php
    namespace Controller;

    use \Core\QueryBuilder;
    
    class TeacherDeleteStudentController{
        private $query;

        public function __construct(){
            $this->query = new QueryBuilder();
        }

        public function getItem($email){
            return $this->query->getItem($email);
        }

        public function getStudent($subid,$secid){
            return $this->query->getStudent($subid,$secid);
        }

        public function showAll(){
            return $this->query->showAll();
        }

        public function deleteStudent($id,$name,$sec){
            return $this->query->deleteStudent($id,$name,$sec);
        }

        public function deleteStudentBhv($id,$name,$tid){
            return $this->query->deleteStudentBhv($id,$name,$tid);
        }
    }