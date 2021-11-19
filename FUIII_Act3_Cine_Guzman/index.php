<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
    	<h1>Registro de empleados</h1>
    	<input type="text" name="name" placeholder="Nombre completo">
		<div><div><br/>Fecha de nacimiento</div>
		<input type="date" id="start" name="fechanac" max="2021-11-18" placeholder="Fecha de nacimiento"></div>
    	<input type="email" name="email" placeholder="Email">
		<input type="text" name="tlfno" placeholder="Telefono">
		<input type="text" name="direccion" placeholder="Direccion">
		<input type="submit" name="empleado">
    </form>
        <?php 
        include("empleado.php");
        ?>
</body>
</html>