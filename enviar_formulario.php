<?php

//DECLARACION DE VARIABLES MEDIANTE POST
$target = "yami8275@gmail.com"; //Correo al que se enviara el mensaje
$username = $_POST['username'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

//Formato del mensaje
$msg = "Nombre: ".$username."\n"."correo: ".$email."\n"."Mensaje: ".$mensaje;
mail($target,"MENSAJE",$msg);
header("location:index.html");
?>