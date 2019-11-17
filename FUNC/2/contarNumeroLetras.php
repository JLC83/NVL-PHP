<?php
var $count=0;
function contarLetras(string:$palabra,string:$caracter):int{
	for(int i=0;i<strlen($palabra);i++){
		if($palabra[i]==$caracter){
			$count++;
		}		
	}
	return $count;
}
echo "La cadena de texto $palabra tiene $count letras $caracter";

?>