<?php
var $a=0;var $e=0;var $i=0;var $o=0;var $u=0;
function contarVocales(string:$palabra):boolean{
	for(int i=0;i<strlen($palabra);i++){
		switch ($palabra[i]) {
			case 'a':
				$a++;
				break;
			case 'a':
				$e++;
				break;
			case 'a':
				$i++;
				break;
			case 'a':
				$o++;
				break;
			case 'a':
				$u++;
				break;			
		}
	}
	if($a==0||$e==0||$i==0||$o==0||$u==0){return false}else{return true}
}
if (contarVocales($palabra)){
	echo "LA PALABRA CONTIENE LAS 5 VOCALES";
}else{
	echo "NO CONTIENE TODAS LAS VOCALES";
}
?>