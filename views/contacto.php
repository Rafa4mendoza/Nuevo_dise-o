<?php
if (isset($_POST['submit'])) {
  $name=$_POST['name'];
  $lastname =$_POST['lastname'];
  $email=$_POST['email'];
  $servicio=$_POST['servicio'];
  $msg=$_POST['msg']

  $subject='Pagina Salud360';
  $message="Nombre".$name."\n"."Apellido".$lastname."\n"."Servicio: ".$servicio."\n"."Escribio: "."\n\n".$msg;
  $headers="De: ".$email;

  if(mail($to, $subject, $message, $headers)){
    echo "Home.html";
  }else{
    echo "Something went wrong"
  }
}
?>

<html>
  <head>
    <meta charset="utf-8">
    <title>SALUD 360</title>
    <link rel="icon" type="image/png" href="Imagenes/SALUD%20360%20logo.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contacto.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery-3.2.1.min.js" ></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery-numerator.js"></script>
  </head>
  <body>
    <header>
      <div class="navbar">
          <div class="container">
            <div class="logo"> <a href="Home.html"><img src="Imagenes/salud360.png" width="100%" height="140%"></a>
              </div>
        <nav>
          <ul>
            <li><a href="Index.html">Inicio</a></li>
            <li><a href="Servicios.html">Servicios</a>
              </li>
            <li><a href="contacto.php">Contacto</a></li>
          </ul>
        </nav>
      </div>
    </div>
    </header>
      
      
      <div class="contactanos">
            <h1>CONTACTANOS</h1>
      </div>
      
      <div class="container">
        <div class="contenedorEmail">
            <div class="cartaEmail">
                <div class="ladoEmail frenteEmail">
                    <h3>EMAIL</h3>
                </div>
                <div class="ladoEmail atrasEmail">
                    <p>holasalud360@gmail.com</p>
                </div>
            </div>
          </div>
          <div class="contenedorEmail">
            <div class="cartaEmail">
                <div class="ladoEmail frenteEmail">
                    <h3>WHATSAPP</h3>
                </div>
                <div class="ladoEmail atrasEmail">
                    <p>8126575761</p>
                </div>
            </div>
          </div>
          <div class="contenedorEmail">
            <div class="cartaEmail">
                <div class="ladoEmail frenteEmail">
                    <h3>TELEFONOS</h3>
                </div>
                <div class="ladoEmail atrasEmail">
                    <p>825290958 y 22617822</p>
                </div>
            </div>
          </div>
      </div>
      
    <div class="container">
        <div class="recuadro-contacto">
    <form action="/contacto.php">

    <label for="name">Nombre</label>
    <input type="text" name="name" placeholder="Nombre">

    <label for="lastname">Apellido</label>
    <input type="text" name="lastname" placeholder="Apellido">
      
    <label for="email">Email</label>
    <input type="email" name="email" placeholder="ejemplo@gmail.com">

    <label for="servicio">¿Que servicio le interesa?</label>
    <select name="servicio">
      <option value="australia">Nutriologo en linea</option>
      <option value="canada">Semana de la Salud</option>
      <option value="usa">Nutricion 360</option>
    </select>

    <label for="message">Mensaje</label>
    <textarea name="msg" placeholder="Deje su mensaje por favor..." style="height:200px"></textarea>

    <input type="submit" value="Enviar">
        
    </form>
    </div>
</div>
      
     <footer>
    <ul>
        <li><a><i class="fa fa-facebook" aria-hidden="true"></i></a></li>    
        <li><a><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>          
    </ul>
      <p>Copyright &copy; PROSALUD 2017  Eduardo Aguirre Pequeño, S/N Mitras centro, Monterrey Nuevo León. <br>Correo: holasalud360@gmail.com Teléfono: 25290958 y 22617822 &copy; 2017</p>
    </footer>

      <!-- Codigio para hacer que la pagina se vea mas fluida y menos cuadrada -->
      <!--Realizado por Salvador Alexandro Ramirez Martinez
                Con contribucion de: David Salazar y Ricardo Romero-->
      <script type="text/javascript" src="js/typed.js"></script>
      <script type="text/javascript" src="js/waypoints.min.js"></script>
      <script type=""></script>
      <script src="jquery-3.2.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.2/jquery.scrollTo.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-localScroll/2.0.0/jquery.localScroll.min.js"></script>
      <script src="js/smooth.js"></script>
      <script type="text/javascript" src="js/waypoints.min.js"></script>
    <script type="text/javascript" src="Counter-Up-master/jquery.counterup.min.js"></script>
  </body>
  </html>
