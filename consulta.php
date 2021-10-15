<html>
    <head>
     <title>Busqueda</title>
     <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
     <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
     <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />
     <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
     <link rel="stylesheet" type="text/css" href="diseños.css">

</head>
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
    <br>
    <br>
    <div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">Seleccione las fechas </h3>
		<hr style="border-top:1px dotted #000;"/>
		<form class="form-inline" method="POST" action="">
			<label>Fecha Desde:</label>
			<input type="date" class="form-control" placeholder="Start"  name="date1" required/>
			<label>Hasta</label>
			<input type="date" class="form-control" placeholder="End"  name="date2" required />
			<input type="button" name="search" value="buscar" onclick=" window.location = 'comprobantes.php'" />
		</form>
</div>
</form>
</marquee>              
</body>
</html>



