<?php
var $count=0;
function contarLetras(String:$palabra):int{
	for(int i=0;i<strlen($palabra);i++){
		if($palabra[i]=='a'){
			$count++;
		}		
	}
}
echo "La cadena de texto $palabra tiene $count letras A";

?>