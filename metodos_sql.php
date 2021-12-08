<?php
    require 'config.php';

    class Conexion{

        protected $conexion;

        function __construct()
        {
            $this->conexion = new mysqli(SERVIDOR, USUARIO, CONTRASENIA, BASEDATOS);
            if ($this->conexion->connect_errno) {
                echo 'Se ha producido un error: '.$this->conexion->connect_error;
            }
        }

        function prueba(){
            echo $_POST['idnivel'];
        }

        function añadir(){
            $sql = 'INSERT INTO niveles (puntuacion, vida, velocidad, bolas) VALUES ("'.$_POST['puntuacion'].'", "'.$_POST['vida'].'", "'.$_POST['velocidad'].'", "'.$_POST['bola'].'")';
            $resultado = $this->conexion->query($sql);

            if ($resultado) {
                echo 'El nivel ha sido agregado';
            }else{
                echo 'No se agregó ningún nivel';
            }
        }
    }

?>