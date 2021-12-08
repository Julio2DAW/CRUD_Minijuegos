<!DOCTYPE html>
<HTML>
	<head>
		<meta charset="UTF-8" />
		<meta type="author" content="Julio Antonio Ramos Gago"/>
		<meta type="description" content="CRUD de la base de datos minijuegos" />
		<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=0.8, maximum-scale=2.0, minimum-scale=0.8" />
		<title> Administrador de Minijuegos </title>
	</head>
	<body>
        <ul>
            <li> <a href="clases/direc.php?op=lista"> LISTA NIVELES </a> </li>
            <li> <a href="clases/direc.php?op=anadir"> AÑADIR NIVELES </a> </li>
        </ul>
        <?php
            if (isset($_GET['op'])) 
            {
                switch ($_GET['op']) 
                {
                    case 'anadir':
                        require('clases/anadir.php'); //Modulado, asi llamara al codigo que requiero para la lista
                        break;

                    case 'borrar':
                        require('clases/borrar.php'); //Modulado, asi llamara al codigo que requiero para borrar
                        break;

                    case 'modificar':
                        require('clases/modificar.php'); //Modulado, asi llamara al codigo que requiero para modificar un empleado
                        break;
                }
            }
            else
            {
                require('clases/lista.php'); //Modulado, asi llamara al codigo que requiero para la lista
            }
            
        ?>
	</body>
</html>
