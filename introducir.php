<?php
    function form(){
        echo'<form method="post" action="" style="border:1px solid #ccc">
        <h1>Registre un empleado</h1>
        <p>Rellene este formulario para registrar el empleado.</p>
        <label>IdEmpleado</label><br />
        <input type="text" placeholder="Introduce el Id" name="ID" required><br />

        <label>Nombre</label><br />
        <input type="text" placeholder="Introduce el nombre" name="nombre" required><br />
    
        <label for="email">Email</label><br />
        <input type="text" placeholder="Email" name="email" ><br />
    
        <label>DNI</label><br />
        <input type="text" placeholder="Intruzca el DNI" name="dni" required><br />
    
        <label>Telefono</label><br />
        <input type="tel" placeholder="Teléfono" name="telef" required><br /><br />
    
        <button type="submit" name="envio">Registrar</button>
    </form>';
    echo'<br /> 
      <form method="post" action=""> 
        <input type="submit" value="Introducir Nuevo empleado" name="volver" >
      </form>  ';
      if(isset($_POST['volver'])){
        header("Location: index.php");
      }    
    }
  ?>  
<!doctype html>
<html lang=es>
<head>
	<meta charset=utf-8 />
	<meta name=viewport content="width=device-width, initial-scale=1" />
	<title>Introduccion de empleados</title>
	<link rel=stylesheet href=css/ejercicio1.css />
</head>
<body>

<?php
    require 'clases.php';
    if(isset($_POST['envio'])){
      $mysqli = new mysqli('localhost', 'root', '', 'empleados');
      $nombre= '"'.$_POST["nombre"].'"';
      $id= '"'.$_POST["ID"].'"';
      $dni= '"'.$_POST["dni"].'"';
      $telef= '"'.$_POST["telef"].'"';
      $consulta = 'insert into empleados values('.$dni.','.$nombre.','.$dni.','.$telef.')';
      echo $consulta;
      $resultado = $mysqli->query($consulta);
        echo'<form  action="">
          <input type="submit" value="volver a buscar" onclick="window.location.reload()">
          </form>';
    }else{
        form();
    }
  ?>
</body>

</html>
