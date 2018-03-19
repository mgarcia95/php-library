<?php
include 'funciones_rel39.php';
//daria error si el fichero esta corrupto o no ha podido escribir,un campo blanco lo tomaria.
if(isset($_REQUEST['enviar'])){
    if(introducir_libro("libreria.txt")) echo "registro correcto";
    else echo "error al introducir datos";
    
}




?>
<form action="" method="post">
Codigo:<input type="text" name="codigo" /><br />
Autor:<input type="text" name="autor" /><br />
Titulo:<input type="text" name="titulo" /><br />
Editorial:<input type="text" name="editorial" /><br />
Año:<input type="text" name="anyo" /><br />
<input type="submit" name="enviar" value="enviar" />
</form>
<a href="ejer9_relacion3.php">Inicio</a>