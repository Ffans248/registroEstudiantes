<?php

include("conexiondb.php");
$usuario =$_POST['usuario'];
$pass =$_POST['pass'];

session_start();

if (!empty($_POST["log"])) {
    if (empty($_POST["usuario"]) and empty($_POST["pass"])) {
        echo '<div class="text-danger">LOS CAMPOS ESTAN VACIOS</div>';

    } else {
        
        $sql=$conn->query("select * from administracion where usuario='$usuario' and pass='$pass'");
        if ($datos=$sql->fetch_object()) {  
            $_SESSION['usuario']=$usuario;
            $_SESSION['id']=$datos->id;
            
        header("Location:registrar.php"); 
        exit();   
        } else {
            echo '<div class="text-danger">El usuario no existe</div>'; 
        }
        
    }
    
}
?>