<?php
//CONEXION
$server = "localhost";
$user = "root";
$pass = "";
$db = "estudiantesregistro";
$conn = mysqli_connect($server,$user,$pass,$db);
if(!$conn){
    die("La conexion fallo: ". mysqli_connect_error());
}else{
    $Pnombre = $_POST['Pnombre'];
    $Snombre = $_POST['Snombre'];
    $Tnombre = $_POST['Tnombre'];
    $Papellido = $_POST['Papellido'];
    $Sapellido = $_POST['Sapellido'];
    $telefono = $_POST['tel'];
    
    $grado = $_POST['grado'];
    $carrera = $_POST['carrera'];
   

    $sql = "INSERT INTO alumnos (primernombre, segundonombre,tercernombre,primerapellido, segundoapellido, telefono, grado, carrera)
    VALUE ('$Pnombre', '$Snombre', '$Tnombre', '$Papellido', '$Sapellido', '$telefono','$grado','$carrera')";

    if(mysqli_query($conn, $sql)){
        header("Location: mostrar.php");
    }else{
        echo "Error: " . mysqli_error($conn);
    }
}
?>