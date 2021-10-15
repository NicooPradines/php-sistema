
<?php
extract($_REQUEST);
include('config.php');

$sql=mysqli_query($link,"select * from upload where id='$del'");
$row=mysqli_fetch_array($sql);

unlink("files/$row[name]");

mysqli_query($link,"delete from upload where id='$del'");

header("Location:consulta.php");

?>