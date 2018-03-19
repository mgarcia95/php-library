<?php
function introducir_libro($fichero){
    $f=fopen($fichero,"a+");
    $error=fwrite($f,$_REQUEST['codigo'].";".$_REQUEST['autor'].";".
                  $_REQUEST['titulo'].";".$_REQUEST['editorial'].";".
                  $_REQUEST['anyo']."\r\n");
    fclose($f);
    
    return $error;   
}

function busca_codigo($fichero,$dato){
    $f=fopen($fichero,"r");
    $control=0;
    while(!feof($f) && $control==0){
        $linea=fgets($f);
        $campo=explode(";",$linea);
        if($dato==$campo[0]) $control=1;
    }
    if ($control==0) return false;
    else return $campo;
    fclose($f);
}

function busca_editorial($fichero,$dato){
    $f=fopen($fichero,"r");
    $control=0;
    while(!feof($f)){
        $linea=fgets($f);
        $campo=explode(";",$linea);
        if($dato==$campo[3]) {
           $control=1; 
           echo "codigo: ".$campo[0]."<br>";
           echo "autor: ".$campo[1]."<br>";
           echo "titulo: ".$campo[2]."<br>";
           echo "editorial: ".$campo[3]."<br>";
           echo "año: ".$campo[4]."<br>";
        }
    }
    if ($control==0) echo "no hay ningun libro con esa editorial";
    fclose($f);
}
//para que no muestre linea en blanco primero lee la linea la comprueba y la vuelve a leer
function muestra($fichero){
    $f=fopen($fichero,"r");
    $linea=fgets($f);//solo lee la primera vez
    while(!feof($f)){
        $campo=explode(";",$linea);
           echo "codigo: ".$campo[0]."<br>";
           echo "autor: ".$campo[1]."<br>";
           echo "titulo: ".$campo[2]."<br>";
           echo "editorial: ".$campo[3]."<br>";
           echo "año: ".$campo[4]."<br>";
           echo "================"; 
           $linea=fgets($f);      
    }
    
    fclose($f);
}

//modifica un campo especificado por el usuario del fichero
function modifica($fichero,$codigo,$autor,$titulo,$editorial,$anyo){
    $f=fopen($fichero,"r");
    $f1=fopen("auxi.txt","w+");
    while(!feof($f)){
        $linea=fgets($f);
        $campo=explode(";",$linea);
        if($codigo==$campo[0]){
            fwrite($f1,$codigo.";".$autor.";".$titulo.";".$editorial.";".$anyo."\r\n");
        }else{
            fwrite($f1,$linea);
        }
    }
    fclose($f);
    fclose($f1);
    unlink($fichero);
    rename("auxi.txt",$fichero);
}


?>