<?php 
    include "bd.php";

    class User extends Database {

        public function registrar($usuario, $Apellido, $DPI, $Email, $Direccion, $Ciudad, $Telefono, $password) {
            $conexion = parent::conectar();
            $sql = "INSERT INTO infoCliente (usuario, Apellido, DPI, Email, Direccion, Ciudad, Telefono, password) 
                    VALUES (?,?,?,?,?,?,?,?)";
            $query = $conexion->prepare($sql);
            $query->bind_param('ssssssss', $usuario, $Apellido, $DPI, $Email, $Direccion, $Ciudad, $Telefono, $password);
            return $query->execute();
        }

        public function logear($usuario, $password) {
            $conexion = parent::conectar();
            $passwordExistente = "";
            $sql = "SELECT * FROM infoCliente WHERE usuario = '$usuario'";
            $respuesta = mysqli_query($conexion, $sql);

            if (mysqli_num_rows($respuesta) > 0) {
                $passwordExistente = mysqli_fetch_array($respuesta);
                $passwordExistente = $passwordExistente['password'];
                
                if (password_verify($password, $passwordExistente)) {
                    $_SESSION['usuario'] = $usuario;
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        }   
    }

?>