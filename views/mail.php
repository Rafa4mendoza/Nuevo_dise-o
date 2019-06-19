<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require 'vendor/autoload.php';
 
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $lastname =$_POST['lastname'];
        $email=$_POST['email'];
        $servicio=$_POST['servicio'];
        $msg=$_POST['msg'];
        $phone=$_POST['phone'];
        $enterprise=$_POST['enterprise'];
        $address=$_POST['address'];
         
         
        $mail = new PHPMailer(true);
         
        $mail->IsSMTP();
        $mail->Host = "salud360.mx"; // Your Domain Name
        $mail->SMTPSecure= 'tls'; 
        $mail->SMTPDebug = 2;
        $mail->SMTPAuth = true;
        $mail->Port = 587;
        $mail->Username = "hola@salud360.mx"; // Your Email ID
        $mail->Password = "poderosa100."; // Password of your email id
         
        $mail->From = "hola@salud360.mx";
        $mail->FromName = "Salud 360";
        $mail->AddAddress ("rafael.mendozag22@gmail.com"); // On which email id you want to get the message
        $mail->AddCC ($email);
         
        $mail->IsHTML(true);
         
        $mail->Subject = "Servicios de Salud 360"; // This is your subject
         
        // HTML Message Starts here
         
        $mail->Body = "
        <html>
            <body>
                <table style='width:600px;'>
                    <tbody>
                        <tr>
                            <td style='width:150px'><strong>Nombre: </strong></td>
                            <td style='width:400px'>$name</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Apellido: </strong></td>
                            <td style='width:400px'>$lastname</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Servicio: </strong></td>
                            <td style='width:400px'>$servicio</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Mensaje: </strong></td>
                            <td style='width:400px'>$msg</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Empresa: </strong></td>
                            <td style='width:400px'>$empresa</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Direccion: </strong></td>
                            <td style='width:400px'>$address</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Telefono: </strong></td>
                            <td style='width:400px'>$phone</td>
                        </tr>                        
                    </tbody>
                </table>
            </body>
        </html>
        ";
        // HTML Message Ends here
         
             
        if(!$mail->Send()) {
            header('Location: contacto.html');
            // Message if mail has been sent
            echo "<script>
                alert('Error, ocurrio un problema con el envio, favor de esperar un momento.');
            </script>";
        }
        else {
            // Message if mail has been not sent
            header('Location: contacto.html');
            echo "<script>
                alert('Correo enviado exitosamente.');
            </script>";
        }
 
    }
?>