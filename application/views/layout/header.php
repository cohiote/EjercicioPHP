<!DOCTYPE html>
<html>
<head>
	<title>Clase 20200527</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-theme.min.css') ?>">
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
</head>
<body>

<div class="navbar navbar-default">
	<div class="container">
		<!-- Agregamos tabla para poder poner botones para acceder a los 2 controladores -->
		<table width= 100%>
			<tr align="center">
				<td>
					<h2><span class="glyphicon glyphicon-home"></span>&nbsp;TutorialsPoint2K16</h2>
 				</td>
				<td >
					<form method="" action="<?php  echo base_url(); ?>Employee">
					<button id="submit-buttons" type="submit" ​​​​​>Empleados</button>
					</form>
				</td>	
				<td>
					<form method="" action="<?php  echo base_url(); ?>Tarea">
					<button id="submit-buttons" type="submit" ​​​​​>Tareas</button>
					</form>
				</td>
			</tr>
		</table>
	</div>
</div>
<div class="container">