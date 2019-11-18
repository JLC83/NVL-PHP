<?php
function reemplazar($fOriginal:string,$fnuevo:string,$palabra:string,$sustituta:string){
	$fd=fopen($fOriginal,'r+');//abrimos el fichero de lectura y escritura al principio del mismo
	$fdnueva=fopen($fnuevo,'w');//abrimos y creamos el fichero nuevo

	while(($linea=fgets($fd))!==false){//mientras haya lineas que leer
		if(strtolower($linea)==$palabra){
			$linea=$sustituta;//cambiamos la encontrada por la nueva
			fwrite($fdnueva, $linea);
		}
		else{fwrite($fdnueva, $linea)}//seguimos escribiendo cada línea en el nuevo fichero
	}
}

?>