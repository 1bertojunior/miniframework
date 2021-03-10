<?php

    namespace App;

use PDO;
use PDOException;

class Connection{

        public function getDb(){
            try {
                $conn = new PDO(
                    'mysql:host=localhost;dbname=agenda;charset=utf8',
                    'root',
                    '',
                    [
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                    ]
                );
                return $conn;

            }catch(\PDOException $e){

            }
        }

    }


?>