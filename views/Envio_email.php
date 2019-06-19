<?php
if (isset($_POST["submit"])) {
    echo "Error de pagina";
}
else{
      $name=$_POST['name'];
  $lastname =$_POST['lastname'];
  $email=$_POST['email'];
  $servicio=$_POST['servicio'];
  $msg=$_POST['msg'];
  $phone=$_POST['phone'];
  $enterprise=$_POST['enterprise'];
  $address=$_POST['address'];
  $From='hola@salud360.mx';
    
    $msg= wordwrap($msg,70,"\r\n");
  $to='hola@salud360.mx';
  $subject='Servicios de Salud 360';
  $message="Nombre: $name"."\n"."Apellido: $lastname"."\n"."Servicio: $servicio"."\n"."Escribio: $msg"."\n\n"."\n\n"."Empresa: $enterprise"."\n"."Dirección: $address"."\n"."Teléfono: $phone";
  $headers ="From: " .$email ."\r\n";
  $headers .= "Reply-To: " .$email ."\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  
  mail($to, $subject, $message, $headers);

  if(mail($to, $subject, $message, $headers,-'f'.$From)){
    header('Location: contacto.html');
    echo "Correo enviado exitosamente";
  }else{
    echo "Error, mensaje no enviado";
  }
}
?>