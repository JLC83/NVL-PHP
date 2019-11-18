<?php
mkdir("18-11-2019 19:34");
$ficheros=scandir(".");
if ($ficheros.length >1){//hay mas de un archivo
	foreach ($ficheros as $key => $value) {
		if($value!=='.php') {//el archivo no es el php 
			$fd=fopen("18-11-2019 19:34\\$value"."modificado",'x');
		}
	}
	
}
?>