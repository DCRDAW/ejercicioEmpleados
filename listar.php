<!doctype html>
<html lang=es>
<head>
	<meta charset=utf-8 />
	<meta name=viewport content="width=device-width, initial-scale=1" />
	<title>Introduccion de empleados</title>

</head>
<body>
    <h1>Listado de empleados</h1>
<?php
    $mysqli = new mysqli('localhost', 'root', '', 'empleados');
    $consulta = 'SELECT * FROM empleados';
    echo $consulta;
    $resultado = $mysqli->query($consulta);
    //$fila = $resultado ->fetch_array();
    if ($resultado->num_rows > 0) {   
        while($fila = $resultado->fetch_assoc()) {
        
        echo "id: " . $fila["idEmpleado"]. " - Nombre: " . $fila["nombre"]. " dni " . $fila["dni"]." - telefono: " . $fila["telefono"]; 
        echo ' < a href="borrar.php ?id='.$fila["dni"].'">';
        echo ' < a href="modificar.php ?id='.$fila["dni"].'">';
        echo "<br>";
        }
      }
  ?>
</body>

</html>
