<?php
  /**
   * Esta clase se usara para emplear los metodos necesarios en un crud
   */
  class Crud
  {
    private $conexion;
    private $resultado;

    function __construct()
    {
      require 'config.php'; //llamamos a los parametros para la conexion
      $this->conexion = new mysqli(SERVIDOR, USUARIO, CONTRASENIA, BASEDATOS);
    }

    public function hacerConsulta($consulta) //metodo usado por si se modifica el objeto que trabaja con bases de datos
    {
      return $this->conexion->query($consulta);
    }

    public function anadir($formulario) //Añadimos un nuevo nivel
    {
      $consulta = "INSERT INTO nivel (puntuacion, vida, velocidad, bolas) VALUES ('".$formulario['puntuacion']."','".$formulario['vida']."',".$formulario['velocidad'].", '".$formulario['bola']."');"; // Colocamos la consulta para agregar
      $this->resultado= $this->hacerConsulta($consulta); //Enviamos la consulta al metodo query del objeto conexion (mysqli)
      return $this->resultado;
    }
  }

?>
