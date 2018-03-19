<?php
include 'funciones_rel39.php';
if(isset($_REQUEST['enviar'])){
    $dato=busca_codigo("libreria.txt",$_REQUEST['codigo']);
    if($dato==false) echo "el libro no existe";
    else{
        ?>
        <form action="" method="post">
        Codigo:<input type="text" name="codigo" value="<?php echo $dato[0];?>"/><br />
        Autor:<input type="text" name="autor" value="<?php echo $dato[1];?>"/><br />
        Titulo:<input type="text" name="titulo" value="<?php echo $dato[2];?>"/><br />
        Editorial:<input type="text" name="editorial" value="<?php echo $dato[3];?>"/><br />
        Año:<input type="text" name="anyo" value="<?php echo $dato[4];?>"/><br />
        <input type="submit" name="modificar" value="modificar" />
        </form>
        <?php
    }
}
if(isset($_REQUEST['modificar'])){
    modifica("libreria.txt",$_REQUEST['codigo'],$_REQUEST['autor'],$_REQUEST['titulo'],
                $_REQUEST['editorial'],$_REQUEST['anyo']);
}


if(!isset($_REQUEST['enviar'])){
?>
<form action="" method="post">
Introduce el codigo del libro a modificar:<input type="text" name="codigo" /><br />
<input type="submit" name="enviar" value="enviar" />
</form>
<a href="ejer9_relacion3.php">Inicio</a>
<?php
}
?>