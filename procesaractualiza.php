<?php
include 'cs.php';

$id =  ( isset($_POST['id']) == TRUE ) ? $_POST['id'] :  '';
$nombres =  ( isset($_POST['nombres']) == TRUE ) ? $_POST['nombres'] :  '';
$apellidos =  ( isset($_POST['apellidos']) == TRUE ) ? $_POST['apellidos'] :  '';
$email =  ( isset($_POST['email']) == TRUE ) ? $_POST['email'] :  '';
$monto =  ( isset($_POST['monto']) == TRUE ) ? $_POST['monto'] :  '';
$grupo =  ( isset($_POST['grupo']) == TRUE ) ? $_POST['grupo'] :  '';
$telefono =  ( isset($_POST['telefono']) == TRUE ) ? $_POST['telefono'] :  '';
$observacion =  ( isset($_POST['observacion']) == TRUE ) ? $_POST['observacion'] :  '';


//actualizar los datos
$actualizar = "UPDATE usuarios SET nombres='$nombres',apellidos='$apellidos',email='$email',monto='$monto',grupo='$grupo',telefono='$telefono'
    ,observacion='$observacion' WHERE id_usuario='$id'";

$resultado=mysqli_query($conexion, $actualizar);

if($conexion){
    echo "<script>alert('Se han actualizado los cambios correctamente');
    window.location='/edicion';</script>";
}else{
    echo "<script>alert('nose insertaron los datos');
    window.history.go(-1);</script>";
}
?>