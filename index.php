<!--Serrano Velarde Jose Alberto-->

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        
    </head>
<body>
    <link rel="stylesheet" href="style.css">

    <div class= nav>
        <A HREF="./index.php">Index </A>
        <br>
        <A HREF="./formulario.php">Formulario </A>
    </div>


    <h1>
        Tabla base de datos 
        <br>
    </h1>
    
   
    <table style="text-align:center;"   >
              <tr>
                <td>id</td>
                <td>nombre</td>
                <td>correo</td>
                <td>contraseña</td>
                <td>ciudad</td>	
              </tr>

              <?php 
              $conexion=mysqli_connect('localhost','root','','formulario');
              $sql="SELECT * from formularioi";
              $result=mysqli_query($conexion,$sql);

              while($mostrar=mysqli_fetch_array($result)){
              ?>
              <tr>
                <td><?php echo $mostrar['id'] ?></td>
                <td><?php echo $mostrar['nombre'] ?></td>
                <td><?php echo $mostrar['user_email'] ?></td>
                <td><?php echo $mostrar['user_password'] ?></td>
                <td><?php echo $mostrar['ciudad'] ?></td>
              </tr>
            <?php 
            }
            ?>
         </table>

          
    


</body>
</html>