<?php
$email=$_POST["email"];
$pass1=$_POST["password"];
$pass2=$_POST["password2"];
if((empty($email))||($pass1!==$pass2)||(($pass1.length)<8)){
	echo "Error en el formulario";
}else{echo "Datos procesados correctamente";}


?>