<?php
    namespace Core;

    use \PDO;
    use \PDOException;
    use \Exception;
    class Connection{
        public static function make(){
            try{
                $pdo = new PDO('mysql:host=127.0.0.1;dbname=university','root','');
                return $pdo;
            }catch(PDOException $e){
                throw new Exception("Cannot Connect to the Internet.");
            }
        }
    }