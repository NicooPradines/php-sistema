<?php

session_start();
 
// comprobar el inicio de sesion para mostrar el nombre
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<?php

include 'config.php'; // conexion con la base de datos

$sql_upload=$link->query("SELECT * FROM upload") or die($link->error);

if(isset($_GET['$legajo'])){ //preguntar si esta la variable
    $id = $_GET['$legajo'];
    $sql_upload=$link->query("SELECT * FROM upload WHERE legajo = $id") or die($link->error); //se aplica el sql
}else{
    $sql_upload=$link->query("SELECT * FROM upload") or die($link->error); // mostra todo
}

?>

<!DOCTYPE html>
<head>
  <title> A VER </title>
</head>    
    <body>
</body>
<ul>
     <?php
     while ($row = $sql_upload->fetch_array() ) { // se crea un array con todo el contenido de la consulta
        $id = $row[1];  
     ?>
    <table border="3px">
      <tr>
      <strong><h1>Hola, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></h1></strong> <!-- Mensaje del nombre de usuario -->
          <td>id</td> <!-- datos obtenidos de la base de datos -->
          <td>nombre</td>
          <td>fecha</td>
          <td>legajo</td>  
     </td>
    
     <tr>
          <td><?php echo $row['id'] ?></td> <!-- datos obtenidos de la base de datos -->
          <td><?php echo $row['name'] ?></td>
          <td><?php echo $row['date'] ?></td>
          <td><?php echo $row['id_legajo'] ?></td>  
     </td>
                                    
    <?php
    } //cierre del while
    ?>                                   
</html>