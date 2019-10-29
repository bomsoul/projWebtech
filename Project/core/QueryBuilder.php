<?php 

    namespace Core;
    use  \Core\Connection;
    use \Exception;
    class QueryBuilder{
        private $pdo;

        public function __construct(){
            $this->pdo = Connection::make();
        }

        public function login($username,$password){
            $query = $this->pdo->prepare("Select * From Admin");
            $query->execute();
            $result = $query->fetchAll(\PDO::FETCH_OBJ);
            foreach($result as $row){
                if($row->username == $username and $row->password == $password){
                    return true;
                }
            }
            return false;
        }
// ไว้้เช็คเวลาเปลี่ยนพาส
        public function checkOldPass($password){
            $query = $this->pdo->prepare("Select * From Admin");
            $query->execute();
            $result = $query->fetchAll(\PDO::FETCH_OBJ);
            foreach($result as $row){
                if($row->password == $password){
                    return true;
                }
            }
            return false;
        }
// เปลี่ยนพาส
        public function changePass($password){
            try{
                $sql = "UPDATE Admin SET password='$password'"." Where username='aus01'";
                $query= $this->pdo->prepare($sql);
                $query->execute(['aus01', $password]);
                return true;
            }catch(Exception $e){
                return false;
            }
        }
        public function checkMail($mail){
            $query = $this->pdo->prepare("Select * From Teacher");
            $query->execute();
            $result = $query->fetchAll(\PDO::FETCH_OBJ);
            foreach($result as $row){
                if($row->t_email == $mail){
                    return true;
                }
            }
            return false;
        }
        public function addTeacher($code,$name,$faculty,$department,$mail){
            try{
                $sql = "INSERT INTO Teacher VALUES ('$code','$mail','$name','$faculty','$department')";
                $query= $this->pdo->prepare($sql);
                $query->execute([$code, $mail,$name,$faculty,$department]);
                return true;
            }catch(Exception $e){
                return false;
            }
        }
// อ่านไฟล์และเพิ่มไฟล์
        public function uploadToServer(){
            try{
                $handle = fopen("./data.csv", "r");
                while (($data = fgetcsv($handle, 0, ',')) !== FALSE) {
                    $query_ip = $this->pdo->prepare("INSERT INTO student VALUES ('$data[0]', '$data[1]', '$data[2]', '$data[3]', '$data[4]', '$data[5]')");
                    $query_ip->execute($data);
                }
                fclose($handle);
                return true;
            }catch(Exception $e){
                return false;
            }
        }
// เอาข้อมูลอาจารออกมา
        public function findName(){
            $query = $this->pdo->prepare("Select * From Teacher");
            $query->execute();
            $result = $query->fetchAll(\PDO::FETCH_OBJ);
            return $result;
        }
// เอาวิชามาโชว์
        public function findSub(){
            $query = $this->pdo->prepare("Select * From Subject");
            $query->execute();
            $result = $query->fetchAll(\PDO::FETCH_OBJ);
            return $result;
        }
// Insert วิชา
        public function addCourse($name,$preq,$sec,$tname){
            try{
                $sql = "INSERT INTO Course VALUES ('$name','$tname','$sec','$preq')";
                $query= $this->pdo->prepare($sql);
                $query->execute([$name, $tname,$sec,$preq]);
                return true;
            }catch(Exception $e){
                return false;
            }
        }

        public function addSubJect($code,$name,$credit,$semester){
            try{
                $sql = "INSERT INTO Subject VALUES ('$code','$name','$credit','$semester')";
                $query= $this->pdo->prepare($sql);
                $query->execute([$code, $name,$credit,$semester]);
                return true;
            }catch(Exception $e){
                return false;
            }
        }

       // อ่าน CSV แล้วเพิ่มลง Database 

        public function uploadStudent(){
            try{
                $handle = fopen("./student.csv", "r");
                while (($data = fgetcsv($handle, 0, ',')) !== FALSE) {
                    echo "<script>alert('TEST');</script>;";
                    if($this->notInClass($data)){
                        $query_ip = $this->pdo->prepare("INSERT INTO student_class (std_id,sbj_id,sec_id,semester) VALUES ('$data[0]', '$data[1]', '$data[2]', '$data[3]')");
                        $query_ip->execute($data);
                    }
                }
                fclose($handle);
                return true;
            }catch(Exception $e){
                return false;
            }
        }

        // เช็คเวลาจะเพิ่มนักรียน

        public function notInClass($data){
            $query = $this->pdo->prepare("Select * From student_class Where sbj_id='$data[1]' and semester = '$data[3]'");
            $query->execute();
            $result = $query->fetchAll(\PDO::FETCH_OBJ);
            foreach($result as $row){
                // echo $data[0];
                // echo '...';
                // echo $row->std_id;
                // echo '...';
                if($row->std_id == $data[0]){
                    // echo 'false';
                    return false;
                }
            }
            return true;
        }

        public function getItem($email){
            $query = $this->pdo->prepare("SELECT teacher.t_id,teacher.t_email,course.sbj_id,subject.sbj_name,course.sec_id,subject.semester
            FROM ((teacher
            INNER JOIN course ON teacher.t_id = course.t_id)
            INNER JOIN subject ON course.sbj_id = subject.sbj_id)
            WHERE teacher.t_email = '$email'");
            $query->execute();
            $result = $query->fetchAll(\PDO::FETCH_OBJ);
            return $result;
        }

        public function getStudent($subject,$sec){
            $query = $this->pdo->prepare("SELECT student_class.std_id,student_class.sec_id,student.name,student_class.sbj_id
            FROM student
            INNER JOIN student_class ON student_class.std_id = student.std_id
            WHERE student_class.sec_id ='$sec' AND student_class.sbj_id='$subject'");
            $query->execute();
            $result = $query->fetchAll(\PDO::FETCH_OBJ);
            return $result;
        }

        public function showAll(){
            $query = $this->pdo->prepare("SELECT student_class.std_id,student_class.sec_id,student.name
            FROM student
            INNER JOIN student_class ON student_class.std_id = student.std_id");
            $query->execute();
            $result = $query->fetchAll(\PDO::FETCH_OBJ);
            return $result;
        }
// 
        public function deleteStudent($id,$name,$sec){
            try{
                $query = $this->pdo->prepare("DELETE FROM student_class  WHERE std_id='$id' AND sbj_id='$name' AND sec_id='$sec'");
                $query->execute();
                return true;
            }catch(Exception $e){
                return false;
            }
        }

        public function deleteStudentBhv($id,$name,$tid){
            try{
                $query = $this->pdo->prepare("DELETE FROM student_bhv  WHERE std_id='$id' AND sbj_id='$name' AND t_id='$tid'");
                $query->execute();
                return true;
            }catch(Exception $e){
                return false;
            }
        }

        public function getTeacherName($mail){
            $query = $this->pdo->prepare("Select * From Teacher Where t_email = '$mail'");
            $query->execute();
            $result = $query->fetchAll(\PDO::FETCH_OBJ);
            foreach($result as $row){
                if($row->t_email== $mail){
                    return $row->t_id;
                }
            }
            return "";
        }

        public function uploadBehavior($tname){
            try{
                $handle = fopen("./student.csv", "r");
                while (($data = fgetcsv($handle, 0, ',')) !== FALSE) {
                        $query_ip = $this->pdo->prepare("INSERT INTO student_bhv (std_id,sbj_id,t_id,semester) VALUES ('$data[0]', '$data[1]', '$tname', $data[3])");
                        $query_ip->execute($data);
                    }
                fclose($handle);
                return true;
            }catch(Exception $e){
                return false;
            }
        }

        public function getAllBhv($mail){
            $query = $this->pdo->prepare("SELECT student.std_id,student.name,student_bhv.bhv_score,teacher.t_id
            FROM Student
            INNER JOIN student_bhv ON student.std_id = student_bhv.std_id
            INNER JOIN teacher ON teacher.t_id = student_bhv.t_id
            WHERE teacher.t_email = '$mail'");
            $query->execute();
            $result = $query->fetchAll(\PDO::FETCH_OBJ);
            return $result;
        }
    
// 
        public function getBhv($subid){
            $query = $this->pdo->prepare("SELECT student.std_id,student.name,student_bhv.bhv_score
            FROM Student
            INNER JOIN student_bhv ON student.std_id = student_bhv.std_id
            WHERE student_bhv.sbj_id = '$subid'");
            $query->execute();
            $result = $query->fetchAll(\PDO::FETCH_OBJ);
            return $result;
        }



// ดึงข้อมูลและคะแนนของไอดีมี่ล็อคอินอยู่มาแสดง
        public function getScore($std_id){
            try{
                $query = $this->pdo->prepare("SELECT student_class.sbj_id,subject.sbj_name,student_class.mid_score,student_class.final_score,student_class.semester,student.std_id
            FROM student_class
            INNER JOIN subject ON subject.sbj_id = student_class.sbj_id
            INNER JOIN student ON student_class.std_id = student.std_id
            WHERE student.std_id = '$std_id'");
            $query->execute();
            $result = $query->fetchAll(\PDO::FETCH_OBJ);
            return $result;
            }
            catch(Exception $e){
               echo "<script>alert('ERROR')</script>";
            }

        }
 
        public function getItems($email){
            try{
                $query = $this->pdo->prepare("sELECT * from Student Where student.std_email='$email'");
                $query->execute();
                $result = $query->fetchAll(\PDO::FETCH_OBJ);
                return $result[0]->std_id;
            }
            catch(Exception $e){
                echo "<script>alert(ERROR)</script>";
            }
        }
// เหมือน getscore
        public function getGrade($std_id){
            $query = $this->pdo->prepare("SELECT student_class.sbj_id,subject.sbj_name,student_class.grade,student_class.credit,student_class.semester,student.std_id
            FROM student_class
            INNER JOIN subject ON subject.sbj_id = student_class.sbj_id
            INNER JOIN student ON student_class.std_id = student.std_id
            WHERE student.std_id = '$std_id'");
            $query->execute();
            $result = $query->fetchAll(\PDO::FETCH_OBJ);
            return $result;
        }

// มีไว้อ่านไฟล์ csv แล้วเอาข้อมูลลง Database เช็คด้วยการเอาข้อมูลใน csv มาเช็คว่าตรงกับรหัสนิสิต,วิชา,และเซคถ้าใช้ก็เขียนข้อมูลลงไปใน DB 
        public function uploadScore(){
            try{
                $handle = fopen("./score.csv", "r");
                while (($data = fgetcsv($handle, 0, ',')) !== FALSE) {
                    $query_ip = $this->pdo->prepare("UPDATE student_class SET mid_score ='$data[3]', final_score =' $data[4]' 
                    WHERE std_id = '$data[0]' AND sbj_id = '$data[1]' AND sec_id = '$data[2]'");
                    $query_ip->execute($data);
                }
                fclose($handle);
                return true;
            }catch(Exception $e){
                return false;
            }
        }

    
// เหมือนอันบ้างบน
        public function uploadGrade(){
            try{
                $handle = fopen("./grade.csv", "r");
                while (($data = fgetcsv($handle, 0, ',')) !== FALSE) {
                    $query_ip = $this->pdo->prepare('UPDATE student_class SET grade ="'.$data[3].'" 
                    WHERE std_id = "'.$data[0].'" AND sbj_id = "'.$data[1].'" AND sec_id = "'.$data[2].'"');
                    $query_ip->execute($data);
                }
                fclose($handle);
                return true;
            }catch(Exception $e){
                return false;
            }
        }
/*
        public function addSubJect($code,$name,$credit,$semester){
            try{
                $sql = "INSERT INTO student_bhv VALUES ('$behavior','$health','$bscore')";
                $query= $this->pdo->prepare($sql);
                $query->execute([$behavior,$health,$bscore]);
                return true;
            }catch(Exception $e){
                return false;
            }
        }*/

        public function checkStudent($email){
            $query = $this->pdo->prepare("SELECT * from Student");
                $query->execute();
                $result = $query->fetchAll(\PDO::FETCH_OBJ);
                foreach($result as $row){
                    if($row->std_email== $email){
                        return true;
                    }
                }
            return false;
        }

        public function checkTeacher($email){
            $query = $this->pdo->prepare("SELECT * from Teacher");
                $query->execute();
                $result = $query->fetchAll(\PDO::FETCH_OBJ);
                foreach($result as $row){
                    if($row->t_email== $email){
                        return true;
                    }
                }
            return false;
        }

    }