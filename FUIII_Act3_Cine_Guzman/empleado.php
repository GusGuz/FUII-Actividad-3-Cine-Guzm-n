<?php 

include("con_db.php");

if (isset($_POST['empleado'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1) {
        $id= trim($_POST['$id']);
	    $name = trim($_POST['name']);
	    $email = trim($_POST['email']);
	    $fechareg = date("d/m/y");
	    $tlfno = trim($_POST['tlfno']);
	    $direccion = trim($_POST['direccion']);
	    $fechanac = trim($_POST['fechanac']);
	    $consulta = "INSERT INTO `empleado`(idEmpleado,`nombre`, `email`, `telefono`, `direccion`, `fecha_reg`, `fecha_nacimiento`) VALUES ('$id','$name','$email','$tlfno','$direccion','$fechareg','$fechanac')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}
?>