<html>
<head>
<title>Ejercicio 9</title></head>
<body>
<?
	//declaro los 3 n�meros
	$A=rand(1,3);
	$B=rand(1,3);
	$C=rand(1,3);
    echo "$A-$B-$C<br>";
	
	//calculo cu�l es el mayor de los n�meros
		if ($A<$B) {
			$A=$B;
		}
		if ($A<$C){
			$A=$C;
		}
	//imprimo el n�mero mayor
		print "El n�mero $A es el n�mero mayor";
?>
</body>
</html>