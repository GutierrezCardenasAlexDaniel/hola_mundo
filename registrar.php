<?php
include 'cs.php';
$nombres = $_POST["nombres"];
$apellidos = $_POST["apellidos"];
$email = $_POST["email"];
$monto = $_POST["monto"];
$grupo = $_POST["grupo"];
$telefono = $_POST["telefono"];
$observacion = $_POST["observacion"];
//consulta
$insertar = "INSERT INTO users(nombres, apellidos, email, monto,grupo, telefono ,observacion) VALUES ('nombres','apellidos','email','monto','grupo','telefono','observacion')";
//ejecutar
$resultado = mysqli_query($conexion, $insertar);

if(!$resultado){
    echo "error al registrar nerd";
}else{
    echo "registrado correctamente";
    include 'mostrar.php';
}

mysqli_close($conexion);
?>
