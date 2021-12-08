<?php
    function anadir()
    {
        require('crud.php'); //buscamos el archivo necesario
        $informacion = new Crud(); // creamos el objeto con los datos d ela base de datos
        if (isset($_POST["acepta"]) AND $informacion->anadir($_POST)== true)  // si se a pulsado el input de acepta y el añadir es verdadero, se hace
        {
            $listaValores = $informacion->buscarNivel($_POST['dni']); //lo busca
            $fila = $listaValores->fetch_assoc(); //saco la fila actualizada, asi informa de que ya hay nuevo empleado
            require('formulario/verNivel.php'); //formulario que muestra el usuario nuevo
            formulario($fila,'NIVEL NUEVO'); //SE ENTRA LA FILA QUE DESEAMOS VER
        }

        $informacion->cerrar(); //CIERRA LA CONEXION CON LA BASE DE DATOS
    }

    anadir();


?>