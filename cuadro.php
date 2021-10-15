<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Comprobantes</title>
     <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
     <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
     <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />
     <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
     <link rel="stylesheet" type="text/css" href="diseños.css">
	</head>

<style>
@import url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700');

$base-spacing-unit: 24px;
$half-spacing-unit: $base-spacing-unit / 2;

$color-alpha: #1772FF;
$color-form-highlight: #EEEEEE;

*, *:before, *:after {
	box-sizing:border-box;
}

body {
	padding:$base-spacing-unit;
	font-family:'Source Sans Pro', sans-serif;
	margin:0;
	
}
label{
	background-color: #333;
	font-family:'arial';

}
h1,h2,h3,h4,h5,h6 {
	margin:0;
	
}

.container {
	max-width: 1000px;
	background-color: blue;
	margin-right:auto;
	margin-left:auto;
	display:flex;
	justify-content:center;
	align-items:center;
	min-height:100vh;
}

.table {
	width:100%;
	background-color: blue;
	border:1px solid $color-form-highlight;
}

.table-header {
	display:flex;
	width:100%;
	background:#000;
	padding:($half-spacing-unit * 1.5) 0;
}

.table-row {
	display:flex;
	width:100%;
	padding:($half-spacing-unit * 1.5) 0;
	
	&:nth-of-type(odd) {
		background:$color-form-highlight;
	}
}
.form{
	background-color: blue;
}
.table-data, .header__item {
	flex: 1 1 20%;
	text-align:center;
}

.header__item {
	text-transform:uppercase;
}

.filter__link {
	color:white;
	text-decoration: none;
	position:relative;
	display:inline-block;
	padding-left:$base-spacing-unit;
	padding-right:$base-spacing-unit;
	
	&::after {
		content:'';
		position:absolute;
		right:-($half-spacing-unit * 1.5);
		color:white;
		font-size:$half-spacing-unit;
		top: 50%;
		transform: translateY(-50%);
	}
	
	&.desc::after {
		content: '(desc)';
	}

	&.asc::after {
		content: '(asc)';
	}
	
}
</style>
<body>
<nav>
        <div class="contenido">
            <ul class="nav navbar-nav ">
                <li><a href="welcome.php"class="btn btn-success">Inicio</a></li>
                <li><a href="consulta.html"class="btn btn-primary">Consulta tu recibo</a></li>
                <li><a href="reset-password.php" class="btn btn-warning">Cambia tu contraseña</a></li>
                <li><a href="contacto.html"class="btn btn-info">Contacto</a></li>
                <li><a href="logout.php" class="btn btn-danger">Cerrar la sesión</a></li>
            </ul>
        </div>
    </nav> 
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
        <br>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">Filtra el recibo de sueldo</h3>
		<hr style="border-top:1px dotted #000;"/>
		<form class="form-inline" method="POST" action="">
			<label>Fecha Desde:</label>
			<input type="date" class="form-control" placeholder="Start"  name="date1"/>
			<label>Hasta</label>
			<input type="date" class="form-control" placeholder="End"  name="date2"/>
			<button class="btn btn-primary" name="search"><span class="glyphicon glyphicon-search"></span></button> <a href="cuadro.php" type="button" class="btn btn-success"><span class = "glyphicon glyphicon-refresh"><span></a>
		</form>
	
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
					<?php include'range.php'?>	
				</tbody>
			</table>
		</div>	
	</div>
</body>
</html>