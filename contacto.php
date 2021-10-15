<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<html>
    <head>
     <title>Contacto</title>
     <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
     <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
     <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />
     <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
     <link rel="stylesheet" type="text/css" href="diseños.css">
     <link href="globe.png" rel="shortcut icon">
</head>
<style>
    .h1{
  font-size: calc(1.375rem + 1.5vw);
  padding: 120px;
  height: center;
  float: unset;
  
}
form{ 
    width: 35px; 
  border-block: inherit;
  padding: 20px;
  height: auto;
  font-family: system-ui;
  border: outset;
  background: rgba(128, 255, 0, 0.596);
  float: revert;
  width: 400px;
  margin: calc(2% + 50px);
  }  
 </style>   
 <body>
 <img src="https://w7.pngwing.com/pngs/359/232/png-transparent-square-decoration-square-three-dimensional-square-clipart.png"alt="500" width="100" height="100">  
    <nav>
        <div class="contenido">
            <ul class="nav navbar-nav ">
                <li><a href="welcome.php"class="btn btn-success">Inicio</a></li>
                <li><a href="consulta.php"class="btn btn-primary">Consulta tu recibo</a></li>
                <li><a href="reset-password.php" class="btn btn-warning">Cambia tu contraseña</a></li>
                <li><a href="contacto.php"class="btn btn-info">Contacto</a></li>
                <li><a href="logout.php" class="btn btn-danger">Cerrar sesión</a></li>
            </ul>
        </div>
    </nav>
    <br>
    <br>
    <br>
    <?php
    if (!isset($_POST['email'])) {
    ?>
    
      <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
      <h1>Formulario de contacto</h1>
        <label>
          Nombre:
          <input name="nombre" type="text" />
        </label>
        <label>
          Teléfono:
          <input name="telefono" type="text" />
        </label>
        <label>
          Email:
          <input name="email" type="text" />
        </label>
        <label>
          Mensaje:
          <textarea name="mensaje" rows="6" cols="25" ></textarea>
        </label>
        <input type="reset" value="Borrar" />
        <input type="submit" value="Enviar" />
      </form>
    <?php
    }else{
      $mensaje="Mensaje del formulario de contacto de nnatali.com";
      $mensaje.= "\nNombre: ". $_POST['nombre'];
      $mensaje.= "\nEmail: ".$_POST['email'];
      $mensaje.= "\nTelefono: ". $_POST['telefono'];
      $mensaje.= "\nMensaje: \n".$_POST['mensaje'];
      $destino= "tuemail@loquesea.com";
      $remitente = $_POST['email'];
      $asunto = "Mensaje enviado por: ".$_POST['nombre'];
      mail($destino,$asunto,$mensaje,"FROM: $remitente");
    ?>
      <p><strong>Mensaje enviado.</strong></p>
    <?php
    }
    ?>



 </body>
</html>