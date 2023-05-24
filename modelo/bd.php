<?php
    class Database {
        public $servidor = 'localhost';
        public $usuario = 'root';
        public $password = '';
        public $database = 'bancavirtual';
        public $port = 82;

        public function conectar() {
            return mysqli_connect(
                $this->servidor,
                $this->usuario,
                $this->password,
                $this->database,
                $this->port
            );
        }
    }

?>