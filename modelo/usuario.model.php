<?php 

    class User extends Database{

        public function getUser($username, $password){
            $sql = "SELECT * FROM infoCliente WHERE nombre = '$username' AND password ='$password'";

            $result = $this->connect()->query($sql);

            $numRows = $result->num_rows;
            if($numRows == 1){
                return true;
            }

            return false;
        }

    }