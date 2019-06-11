<?php
if (isset($_POST['submit'])) {
  $name=$_POST['name'];
  $lastname =$_POST['lastname'];
  $email=$_POST['email'];
  $servicio=$_POST['servicio'];
  $msg=$_POST['msg']

  $to='holasalud360@gmail.com';
  $subject='Servicios de Salud 360';
  $message="Nombre".$name."\n"."Apellido".$lastname."\n"."Servicio: ".$servicio."\n"."Escribio: "."\n\n".$msg;
  $headers="De: ".$email;
  
  mail($to, $subject, $message, $headers);

  if(mail($to, $subject, $message, $headers)){
    echo "Home.html";
  }else{
    echo "Something went wrong";
  }
}
?>
