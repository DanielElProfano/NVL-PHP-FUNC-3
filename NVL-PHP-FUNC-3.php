<?php

cadena("pElirojo y un poco ambiguo");

function cadena($cadena)
{

	$comprueba = compruebaVocales($cadena);
	
	if ($comprueba == true){

		echo "La frase \"$cadena\" contiene todas las vocales";
	}
	else{
		echo "La frase \"$cadena\" no contiene todas las vocales";
	}
}
function compruebaVocales($cadena)
{
//	echo $cadena;
	$cadenaMin = strtolower($cadena);
	
	$array = str_split($cadenaMin);
	//echo $array;
	if (in_array('a', $array) and in_array('e', $array) and in_array('i', $array) and in_array('o', $array) and in_array('u', $array)){
		
		return true;

	}
	else{
		
		return false;
	}

}

?>