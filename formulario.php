<!--Serrano Velarde Jose Alberto-->

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        
    </head>
<body>

  <?php
       include("conexion.php")
  ?>
    <link rel="stylesheet" href="style.css">

    <div class= nav>
        <A HREF="./index.php">Index </A>
        <br>
      
    </div>


    <h1>
    Contacto  <br>
    </h1>

    <form action="./store.php" method="POST">
        <ul>
         <li>
           <label for="name">Nombre:</label>
           <input type="text" id="nombre" name="nombre">
         </li>
         <li>
           <label for="email">Correo electrónico:</label>
           <input type="email" id="email" name="user_email">
         </li>

         
       
          <li>
            <label for="mail">Contraseña:</label>
            <input type="password" id="contraseña" name="user_password">
          </li>
          
          
          <
            <label for="Ciudad">Ciudad:</label>
          <select name="ciudad">
            <option value="Guadalajara">Guadalajara</option>
            <option value="Zapopan" selected>Zapopan</option>
            <option value="Tonalá">Tonalá</option>
            <option value="Otra">Otra </option>
          </select>
        </li>
     
          <li class="button">
            <button type="submit">Enviar</button>
          </li>
          
       
        </ul>
       </form>

     
       


</body>
</html>
