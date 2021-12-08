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

    public function lista() //Traemos todas las filas de la tabla empleado
    {
      $consulta = "SELECT idNivel as id, puntuacion, vida, velocidad, bolas FROM niveles;"; //Colocamos la instruccion para traer los datos de nombre, correo y id(solo funcional) de todos los empleados
      $this->resultado=$this->hacerConsulta($consulta); //Enviamos la consulta al metodo query del objeto conexion (mysqli) y devolvera el array con las filas pedidas
      return $this->resultado;
    }

    public function buscarId($id) //Traemos el empleado buscando por su id
    {
      $consulta = "SELECT * FROM niveles WHERE idNivel = '".$id."';"; // Colocamos la consulta para traer todos los datos donde sea el id seleccionado
      $this->resultado= $this->hacerConsulta($consulta); //Enviamos la consulta al metodo query del objeto conexion (mysqli) y devolvera el array con la fila pedida
      return $this->resultado;
    }

    public function eleminarId($id) //Borra el empleado por su id
    {
      $consulta = "DELETE FROM niveles WHERE idNivel = ".$id.";"; // Colocamos la consulta para eliminar el empleado pedido
      $this->resultado= $this->hacerConsulta($consulta); //Enviamos la consulta al metodo query del objeto conexion (mysqli)
      return $this->resultado;
    }

    public function modificarId($formulario) //Modificiamos el empleado pedido por su id
    {
      $consulta = "UPDATE niveles SET puntuacion='".$formulario['puntuacion']."', vida='".$formulario['vida']."', velocidad='".$formulario['velocidad']."', bolas='".$formulario['bolas']."'  WHERE idNivel = '".$formulario['id']."'"; // Colocamos la consulta para actualizar los datos de dicho empleado
      $this->resultado= $this->hacerConsulta($consulta); //Enviamos la consulta al metodo query del objeto conexion (mysqli)
      return $this->resultado;
    }

    public function anadir($formulario) //Añadimos un nuevo empleado
    {
      $consulta = "INSERT INTO nivel (puntuacion, vida, velocidad, bolas) VALUES ('".$formulario['puntuacion']."','".$formulario['vida']."',".$this->vaciar($formulario['velocidad']).", '".$formulario['bola']."');"; // Colocamos la consulta para agregar
      $this->resultado= $this->hacerConsulta($consulta); //Enviamos la consulta al metodo query del objeto conexion (mysqli)
      return $this->resultado;
    }

    public function vaciar($valor) //Metodo para colocar si algun cambio esta vacio, como null
    {
      if (empty($valor)) 
      {
        return 'null'; // envio una concatenacion poruqe si no no lo entiende php
      }
      else
      {
        return "'".$valor."'";//si el valor es diferente a vacio pues introduce el valor que metimos por formulario
      }
    }
  }

?>
