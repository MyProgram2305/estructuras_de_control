<!--
	Pablo Miguel Velasco Garcia 4°H
-->
<html>
<head>
	<title>Programa Completo</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>

	<?php 
		/*
		IF
		*/
		echo "<h1>Estructuras de control...(IF)</h1>";
		$valor_a=12.1;
		$valor_b=6.1;
		echo '$valor_a= '.$valor_a.'<br>';
		echo '$valor_b= '.$valor_b.'<br>';
		//Si $valor_a es mayor a $valor_b entonces se cumple la condicion
		if ($valor_a > $valor_b) {
			echo "se cumple la condicion";
		}else{
			echo "no se cumple la condicion";
		}
		/*
		SWITCH
		*/
		echo "<hr>";
		echo "<h1>Estructuras de control...(SWITCH)</h1>";
		$rud=rand(1,10);//rango del 1 al 10
		echo $rud;
		echo "<br>";
		switch($rud){
		// Si el rango es alguno de los casos(1,5 u 8) entra
			case '1':{
				echo "fue 1";
				break;}
			case '5':{
				echo "fue 5";
				break;}
				case '8':{
				echo "fue 8";
				break;}
			default:{
				echo "fue otro diferente a 1,5,8";
				break;
			};
		}
		/*
		FOR
		*/
		echo "<hr>";
		echo "<h1>Estructuras de control repetitivas...(FOR...)</h1>";
		$e=1;
		for ($a=1; $a < 10; $a++) { 
			echo "$a"."*" ."$e" ."="."$a<br>";
		}

		/*
		WHILE
		*/
		echo "<hr>";
		echo "<h1>Estructuras de control repetitivas...(WHILE...)</h1>";
		$entra=rand(1,8);
		echo $entra;
		echo "<br>";
		while($entra <= 7) {
			echo "Hola mundo <br>";
			$entra++;
		}
		/*
		DO-WHILE
		*/
		echo "<hr>";
		echo "<h1>Estructuras de control repetitivas...(DO-WHILE...)</h1>";

		$i=0;

		do{
			echo "$i"." "."Hola mundo";
			$i++;
			echo"<br>";
		} while ($i<=10)


	?>
	<img src="img/taco.jpeg" width="50">
	</body>
</html>