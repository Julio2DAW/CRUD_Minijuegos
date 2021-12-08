<?php
    function formulario($fila)
    {
        echo 
            '<section>
                <form action="" method="post" >
                    <h2> MODIFICACION DEL NIVEL </h2>
                    <div>
                        <label for="id"> Identificador </label>
                        <input type="number" name="id" value="'.$fila['idNivel'].'" readonly="readonly"/>
                    </div>
                    <div>
                        <label for="puntuacion"> PUNTUACIÓN </label>
                        <input type="number" name="puntuacion" value="" required="required"/>
                    </div>
                    <div>
                        <label for="vida"> VIDA </label>
                        <input type="number" name="vida" value="" required="required"/>
                    </div>
                    <div>
                        <label for="velocidad"> VELOCIDAD </label>
                        <input type="number" name="velocidad" value="" required="required"/>
                    </div>
                    <div>
                        <label for="bola"> BOLA </label>
                        <input type="number" name="bola" value="" required="required"/>
                    </div>
                    <input type="submit" value="MODIFICAR" name="acepta" />
                    <a href="index.php"><input type="button" value="CANCELAR"/></a>
                </form>
            </section>';
    }
    formulario($fila);
?>