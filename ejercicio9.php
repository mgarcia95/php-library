<html>
<head>
<title>Ejercicio 9</title></head>
<body>
<?
	//declaro los 3 números
	$A=rand(1,3);
	$B=rand(1,3);
	$C=rand(1,3);
    echo "$A-$B-$C<br>";
	
	//calculo cuál es el mayor de los números
		if ($A<$B) {
			$A=$B;
		}
		if ($A<$C){
			$A=$C;
		}
	//imprimo el número mayor
		print "El número $A es el número mayor";
?>
</body>
</html>