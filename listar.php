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
    require 'conexion.php';
    $consulta = 'SELECT * FROM empleados';
    //echo $consulta;
    $resultado = $mysqli->query($consulta);
    //$fila = $resultado ->fetch_array();
    echo '<p>';
    if ($resultado->num_rows > 0) {   
        while($fila = $resultado->fetch_assoc()) {
        
        echo "id: " . $fila["idEmpleado"]. " - Nombre: " . $fila["nombre"]. " dni " . $fila["dni"]." - telefono: " . $fila["telefono"]; 
        echo ' <a href="modificar.php ?id='.$fila["idEmpleado"].'">Modificar</a>';
        echo ' <a href="borrar.php ?id='.$fila["idEmpleado"].'"onclick="return confirm(`Are you sure you want to delete this item?`);">Borrar</a>';
        echo "<br>";
        }
      }
      echo '</p>';
      echo' 
      <form method="post" action=""> 
        <input type="submit" value="Volver al inicio" name="volver" >
      </form>  ';
      if(isset($_POST['volver'])){
        header("Location: index.php");
      }       
  ?>
</body>

</html>
