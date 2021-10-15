<?php
include('conn.php');
?>

<?php
$conn=new PDO('mysql:host=localhost; dbname=myweb', 'root', '') or die(mysqli_error($conn)); // conexion con la bd
if(isset($_POST['submit'])!=""){ // isset sirve para evaluar si una variable está definida o no.
  $name=$_FILES['photo']['name'];
  $size=$_FILES['photo']['size'];
  $type=$_FILES['photo']['type'];
  $temp=$_FILES['photo']['tmp_name'];
  $leg=$_POST['id_legajo'];
  $date = date('Y-m-d H:i:s');
  $caption1=$_POST['caption'];
  $link=$_POST['link'];
}
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	</head>
<body>
<img src="https://w7.pngwing.com/pngs/359/232/png-transparent-square-decoration-square-three-dimensional-square-clipart.png"alt="500" width="100" height="100">  
    <nav>
        <div class="contenido">
            <ul class="nav">
                <li><a href="welcome.php"class="btn btn-success">Inicio</a></li>
                <li><a href="consulta.php"class="btn btn-primary">Consulta tu recibo</a></li>
                <li><a href="reset-password.php" class="btn btn-warning">Cambia tu contraseña</a></li>
                <li><a href="contacto.php"class="btn btn-info">Contacto</a></li>
                <li><a href="logout.php" class="btn btn-danger">Cerrar sesión</a></li>
            </ul>
        </div>
    </nav>
  
	<nav class="navbar navbar-default">
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">Seleccione las fechas </h3>
		<hr style="border-top:1px dotted #000;"/>
		<form class="form-inline" method="POST" action="">
			<label>Fecha Desde:</label>
			<input type="date" class="form-control" placeholder="Start"  name="date1"/>
			<label>Hasta</label>
			<input type="date" class="form-control" placeholder="End"  name="date2"/>
			<button class="btn btn-primary" name="search"><span class="glyphicon glyphicon-search"></span></button> <a href="encontrarFecha.php" type="button" class="btn btn-success"><span class = "glyphicon glyphicon-refresh"><span></a>
		</form>
		<br /><br />
		<div class="table-responsive">	
			<table class="table table-bordered">
				<thead class="alert-info">
					<tr>
						<th>ID</th>
						<th>ARCHIVO</th>
						<th>FECHA</th>
						<th>LEGAJO</th>
						<th>DESCARGAR</th>
					</tr>
				</thead>
				<tbody>
				<a href="download.php?filename=<?php echo $name;?>" title="click to download"><span class="glyphicon glyphicon-paperclip" style="font-size:20px; color:blue"></span></a> <!-- Icono para descargar -->
					<?php include'filtroFecha.php'?>	
				</tbody>
			</table>
		</div>	
	</div>
</body>
</html>