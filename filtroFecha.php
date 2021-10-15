<?php
	include 'config.php';
	if(ISSET($_POST['search'])){
		$legajo=
		$date1 = date("Y-m-d", strtotime($_POST['date1']));
		$date2 = date("Y-m-d", strtotime($_POST['date2']));
		$query=mysqli_query($link, "SELECT * FROM `upload` WHERE `date` BETWEEN '$date1' AND '$date2'") or die(mysqli_error());
		$row=mysqli_num_rows($query);
		if($row>0){
			while($fetch=mysqli_fetch_array($query)){
?>
	<tr>
        <td><?php echo $fetch['id'] ?></td> <!-- datos obtenidos de la base de datos -->
        <td><?php echo $fetch['name'] ?></td>
        <td><?php echo $fetch['date'] ?></td>
        <td><?php echo $fetch['id_legajo'] ?></td>
	</tr>
<?php
			}
		}else{
			echo'
			<tr>
				<td colspan = "4"><center>Registros no Existen</center></td>
			</tr>';
		}
	}else{
		$query=mysqli_query($link, "SELECT * FROM `upload`") or die(mysqli_error());
		while($fetch=mysqli_fetch_array($query)){
?>
	<tr>
		<td><?php echo $fetch['id']?></td>
		<td><?php echo $fetch['name']?></td>
		<td><?php echo $fetch['date']?></td>
		<td><?php echo $fetch['id_legajo']?></td>
	</tr>
<?php
		}
	}
?>
