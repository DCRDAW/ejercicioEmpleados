<?php
    function form(){
        echo'<form method="post" action="" style="border:1px solid #ccc">
        <h1>Busque un empleado</h1>
        <select name="buscar" id="busc">
          <option value="id">Por id</option>
          <option value="nombre">Por Nombre</option>
          <option value="dni">Por DNI</option>
        </select>
        <label>Término de búsqueda</label><br />
        <input type="text" placeholder="Introduce el término" name="termino" required><br />
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
<!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8" >
        <title>Pagina empleados</title>
        <link rel=stylesheet href=estiloIntroducir.css />
        
    </head>
    <body>
       <header>
           <h1>Aplicacion Empleados</h1>
       </header>
       <nav>
            <h1>Buscar un empleado</h1>
       </nav>
       <div>
            <aside>
                <p>
                     
                </p>
            </aside>
            <article>
            <?php
              require 'conexion.php';
              if(isset($_POST['envio'])){
                  $eleccion= $_POST['buscar'];
                  $termino=$_POST['termino'];
                  switch ($eleccion) {
                    case 'id':
                      $consulta="select * from Empleados where idEmpleado='".$termino."'";
                      break;
                    case 'nombre':
                      $consulta="select * from Empleados where nombre='".$termino."'";
                      break;
                    case 'dni':
                      $consulta="select * from Empleados where dni='".$termino."'";
                      break;
                    default:
                      echo'error';
                      break;
                  }
                  $resultado = $mysqli->query($consulta);
                  if ($resultado->num_rows > 0) {   
                    while($fila = $resultado->fetch_assoc()) {
                      echo "id: " . $fila["idEmpleado"]. " - Nombre: " . $fila["nombre"]. " dni " . $fila["dni"]." - telefono: " . $fila["telefono"]; 
                    }
                  }
                  echo'<form  action="">
                      <input type="submit" value="volver a buscar" onclick="window.location.reload()">
                      </form>';
              }else{
                  form();
              }
            ?>
            </article> 
       </div>
       <footer></footer>
    </body>
</html>



