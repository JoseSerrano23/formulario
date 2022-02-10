<?php
include("formulario.php");
if(count($_POST) > 0 )
{
    $nombre =  $_POST['nombre'];
    $user_email =  $_POST['user_email'];
    $ciudad =  $_POST['ciudad'];
    $user_password =  $_POST['user_password'];
    $sql = "INSERT INTO formularioi (nombre,user_email,ciudad,user_password)VALUES ('$nombre', '$user_email', '$ciudad', '$user_password')";
        $conn->exec($sql);
}
    
       header('Location: index.php');
?>