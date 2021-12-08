<?php
    function formulario($fila)
    {
        echo 
            '<section>
                <form action="?id='.$_GET['id'].'&op=borrar" method="post">
                    <h2>¿SEGURO DE BORRAR ESTE NIVEL?</h2>
                    <div>
                        <label for="id"> Identificador </label>
                        <input type="number" name="id" value="'.$fila['idNivel'].'" readonly="readonly"/>
                    </div>
                    <div>
                        <label for="puntuacion"> PUNTUACION </label>
                        <input type="number" name="puntuacion" value="'.$fila['puntuacion'].'" readonly="readonly"/>
                    </div>
                    <div>
                        <label for="vida"> VIDA </label>
                        <input type="number" name="vida" value="'.$fila['vida'].'" readonly="readonly"/>
                    </div>
                    <div>
                        <label for="velocidad"> VELOCIDAD </label>
                        <input type="number" name="velocidad" value="'.$fila['velocidad'].'"readonly="readonly"/>
                    </div>
                    <div>
                        <label for="bola"> BOLAS </label>
                        <input type="number" name="bola" value="'.$fila['bola'].'" readonly="readonly"/>
                    </div>
                    <input type="submit" value="BORRAR" name="acepta" />
                    <a href="index.php"><input type="button" value="CANCELAR"/></a>
                </form>
            </section>';
    }
    formulario($fila); //SE ENTRA LA FILA QUE DESEAMOS VER
?>