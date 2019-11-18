<?php
$count=0;//variable para contar el número de veces que aparece la palabra
$fd=fopen('el_quijote.txt','r'); //abrimos fichero para lectura

while (($linea=fgets($fd))!==false) {//si hay línea devuelve true
	if(strtolower($linea)=='molino'){$count++;}
}
echo "La palabra molino aparece $count veces"

fclose($fd);//cerramos fichero 

?>