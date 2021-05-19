<?php
    include("cs.php");
    $test ="SELECT * FROM users";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="container-table">
        <div class="table-title">Datos del Registro <a href="edicion.php" class="table-edit">Edicion</a> </div>
        <div class="table-header">N°</div>
        <div class="table-header">Nombres</div>
        <div class="table-header">Apeliidos</div>
        <div class="table-header">Email</div>
        <div class="table-header">Monto</div>
        <div class="table-header">Grupo</div>
        <div class="table-header">Telefono</div>
        <div class="table-header">Observacion</div>
        <?php $resultado= mysqli_query($conexion, $users);
        while($row=mysqli_fetch_assoc($resultado)){?>
            <div class="table-item"><?php echo $row["id_usuario"];?></div>
            <div class="table-item"><?php echo $row["nombres"];?></div>
            <div class="table-item"><?php echo $row["apellidos"];?></div>
            <div class="table-item"><?php echo $row["email"];?></div>
            <div class="table-item"><?php echo $row["monto"];?></div>
            <div class="table-item"><?php echo $row["grupo"];?></div>
            <div class="table-item"><?php echo $row["telefono"];?></div>
            <div class="table-item"><?php echo $row["observacion"];?></div>
            <?php } mysqli_free_result($resultado); ?>
    </div>
</body>
</html>
