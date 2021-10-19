 <!doctype html>
<html lang=es>
<head>
	<meta charset=utf-8 />
	<meta name=viewport content="width=device-width, initial-scale=1" />
	<title>Introduccion de empleados</title>
	<link rel=stylesheet href=css/ejercicio1.css />
</head>
<body>
<a href="url_to_delete" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
<?php
  echo'<br /> 
    <form method="post" action=""> 
    <input type="submit" value="Volver al inicio" name="volver" >
    </form>  ';
    if(isset($_POST['volver'])){
      header("Location: index.php");
    }    
    
  ?>
</body>

</html>
