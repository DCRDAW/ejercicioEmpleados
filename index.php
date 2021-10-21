<!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8" >
        <title>Pagina empleados</title>
        <link rel=stylesheet href=estilo.css />
        
    </head>
    <body>
       <header>
           <h1>Aplicacion Empleados</h1>
       </header>
       <nav>
            <h1>Menu Principal</h1>
       </nav>
       <div>
            <aside>
                <p>
                     
                </p>
            </aside>
            <article>
                <?php
                    require 'conexion.php';
                    $consulta = 'SELECT * FROM Empleados';
                    //echo $consulta;
                    $resultado = $mysqli->query($consulta);
                    //$fila = $resultado ->fetch_array();
                    echo '<div id="listado" ';
                    echo 'Resultado del listado :<br />';
                    if ($resultado->num_rows > 0) {   
                        while($fila = $resultado->fetch_assoc()) {
                        echo '<p id="contenido">';
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
            </article> 
       </div>
       <footer></footer>
    </body>
</html>
