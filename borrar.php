<?php
    function form(){
        echo'<form method="post" action="" style="border:1px solid #ccc">
        <h1>Borre a un empleado</h1>
        <p>Rellene este formulario para registrar el empleado.</p>
        <label>Id</label><br />
        <input type="text" placeholder="Introduce el Id" name="id" required><br />
    
        <input type="submit" value="volver a buscar" onclick="window.location.reload()">
    </form>';
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
<a href="url_to_delete" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
<?php
    
    if(isset($_POST['envio'])){
        
        echo'<form  action="">
            <input type="submit" value="volver a buscar" onclick="window.location.reload()">
            </form>';
    }else{
        form();
    }
  ?>
</body>

</html>
