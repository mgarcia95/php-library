<?php
include 'funciones_rel39.php';

if(isset($_REQUEST['enviar'])){
    if($_REQUEST['busqueda']=="codigo"){
        $info=busca_codigo("libreria.txt",$_REQUEST['dato']);
        if($info!=false){
            echo "codigo: ".$info[0]."<br>";
            echo "autor: ".$info[1]."<br>";
            echo "titulo: ".$info[2]."<br>";
            echo "editorial: ".$info[3]."<br>";
            echo "año: ".$info[4]."<br>";
            
        }else{
            echo "no encontrado";
        }
    }
    if($_REQUEST['busqueda']=="editorial"){
        busca_editorial("libreria.txt",$_REQUEST['dato']);
    }
    
}





?>
<form action="" method="post">
<select name="busqueda">
    <option value="codigo">Codigo</option>
    <option value="editorial">Editorial</option>
</select><br />
que quieres buscar: <input type="text" name="dato" />
<input type="submit" name="enviar" value="Enviar" />
</form>
<a href="ejer9_relacion3.php">Inicio</a>