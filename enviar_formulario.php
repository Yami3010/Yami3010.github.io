<?php

//DECLARACION DE VARIABLES MEDIANTE POST
$target = "yami8275@gmail.com"; //Correo al que se enviara el mensaje

//Variables obtenidas de la pagina web mediante Javascript.
$username = $_POST['username'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

//Formato del mensaje
$msg = "Hola, soy ".$username."."."\n\n".$mensaje."\n\n"."Puedes contactarme por siguiente correo: ".$email.".";
mail($target,"MENSAJE",$msg);

header("location:index.html");

?>