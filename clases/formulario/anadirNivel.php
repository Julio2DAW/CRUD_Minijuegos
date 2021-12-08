<?php
    function formulario()
    {
        echo 
            '<section>
                <form action="" method="post" >
                    <h2> AÑADIR NUEVO NIVEL </h2>
                    <div>
                        <label for="id"> NIVEL </label>
                        <input type="number" name="id" value="" required="required"/>
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
                    <input type="submit" value="AÑADIR" name="acepta" />
                    <a href="index.php"><input type="button" value="CANCELAR"/></a>
                </form>
            </section>';
    }
    formulario(); //LLAMA AL FORMULARIO DE AÑADIR
?>