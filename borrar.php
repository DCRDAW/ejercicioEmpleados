 <!doctype html>
<html lang=es>
<head>
	<meta charset=utf-8 />
	<meta name=viewport content="width=device-width, initial-scale=1" />
	<title>Introduccion de empleados</title>
  <link rel=stylesheet href=estiloIndex.css />
</head>
<body>

<?php
  require 'conexion.php';
  $id=$_GET["id"];
  $consulta = 'delete from empleados where idEmpleado="'.$id.'"';
  echo 'EMPLEADO BORRADO';
  $resultado = $mysqli->query($consulta);
  echo'<br /> 
    <form method="post" action=""> 
    <input type="submit" value="Volver al inicio" name="volver" >
    </form>  ';
    if(isset($_POST['volver'])){
      header("Location: menuOpciones.php");
    }    
    
  ?>
</body>

</html>
