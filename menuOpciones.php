<!doctype html>
<html lang=es>
<head>
	<meta charset=utf-8 />
	<meta name=viewport content="width=device-width, initial-scale=1" />
	<title>Introduccion de empleados</title>
	<link rel=stylesheet href=estiloOpciones.css />
</head>
<body>
    <form method="post" action=""> 
        <input type="submit" value="Introducir Nuevo empleado" name="introducir" >
        <input type="submit" value="Buscar un empleado" name="buscar" >
        <input type="submit" value="Listado de empleados" name="listar" >
    </form> 
<?php
    if(isset($_POST['introducir'])){
        header("Location: introducir.php");
    }else{
      if(isset($_POST['buscar'])){
        header("Location: buscar.php");
      }else{
        if(isset($_POST['listar'])){
          header("Location: index.php");
        }
      } 
    }      
?>
</body>

</html>