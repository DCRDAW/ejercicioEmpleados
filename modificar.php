<?php
    function form(){
        echo'<form method="post" action="" style="border:1px solid #ccc">
        <h1>Registre un empleado</h1>
        <p>Rellene este formulario para modificar el empleado.</p>
        
        <label>Nombre</label><br />
        <input type="text" placeholder="Introduce el nombre" name="nombre" required><br />
    
        <label for="email">Email</label><br />
        <input type="text" placeholder="Email" name="email" ><br />
    
        <label>DNI</label><br />
        <input type="text" placeholder="Intruzca el DNI" name="dni" required><br />
    
        <label>Telefono</label><br />
        <input type="tel" placeholder="Teléfono" name="telef" required><br /><br />
    
        <input type="submit" name="envio">
    </form>';
    echo'<br /> 
        <form method="post" action=""> 
        <input type="submit" value="Volver al inicio" name="volver" >
        </form>  ';
      if(isset($_POST['volver'])){
        header("Location: menuOpciones.php");
      }
    }
  ?>  
<!doctype html>
<html lang=es>
<head>
	<meta charset=utf-8 />
	<meta name=viewport content="width=device-width, initial-scale=1" />
	<title>Modificar empleados</title>
	<link rel=stylesheet href=estilointroducir.css />
</head>
<body>

<?php
    require 'conexion.php';

    if(isset($_POST['envio'])){
      $nombre= $_POST["nombre"];
      $id= $_GET["id"];
      $dni= $_POST["dni"];
      $telef= $_POST["telef"];
      $correo=$_POST["email"];
      $consulta = 'update empleados set nombre="'.$nombre.'",dni="'.$dni.'",correo="'.$correo.'",telefono="'.$telef.'";';
      echo $consulta;
      $resultado = $mysqli->query($consulta);
      echo'<br /> 
        <form method="post" action=""> 
        <input type="submit" value="Volver al inicio" name="volver" >
        </form>  ';
      if(isset($_POST['volver'])){
        header("Location: index.php");
      }
    
    }else{
        form();
    }
  ?>
</body>

</html>