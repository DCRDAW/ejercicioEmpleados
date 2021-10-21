<!doctype html>
<html lang=es>
<head>
	<meta charset=utf-8 />
	<meta name=viewport content="width=device-width, initial-scale=1" />
  <link rel=stylesheet href=estiloIndex.css />
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
    echo '<div>';
    echo 'Resultado del listado :<br />';
    if ($resultado->num_rows > 0) {   
        while($fila = $resultado->fetch_assoc()) {
        echo '<p>';
        echo "| Id: " . $fila["idEmpleado"]. " | Nombre: " . $fila["nombre"]. " | Dni " . $fila["dni"]." | Correo " . $fila["correo"]." | Telefono: " . $fila["telefono"]; 
        echo ' <a href="modificar.php ?id='.$fila["idEmpleado"].'">| MODIFICAR</a>';
        echo ' <a href="borrar.php ?id='.$fila["idEmpleado"].'"onclick="return confirm(`¿Estás seguro de que quieres borrar a este empleado?`);">| BORRAR |</a>';
        echo "<br>";
        echo '</p>';
        }
      }
      echo' 
      <form method="post" action=""> 
        <input type="submit" value="Al menu de opciones" name="volver" >
      </form>  ';
      echo '</div>';
      if(isset($_POST['volver'])){
        header("Location: menuOpciones.php");
      }       
  ?>
</body>

</html>
