<?php
    include("cs.php");
    $usuarios ="SELECT * FROM usuarios";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>panel de edicion</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="container-table container-table--edit">
        <div class="table-title">Datos del Registro </div>
        <div class="table-header">N°</div>
        <div class="table-header">Nombres</div>
        <div class="table-header">Apeliidos</div>
        <div class="table-header">Email</div>
        <div class="table-header">Monto</div>
        <div class="table-header">Grupo</div>
        <div class="table-header">Telefono</div>
        <div class="table-header">Operaciones</div>
        <?php $resultado= mysqli_query($conexion, $usuarios);
        while($row=mysqli_fetch_assoc($resultado)) {?>
            <div class="table-item"><?php echo $row["id_usuario"];?></div>
            <div class="table-item"><?php echo $row["nombres"];?></div>
            <div class="table-item"><?php echo $row["apellidos"];?></div>
            <div class="table-item"><?php echo $row["email"];?></div>
            <div class="table-item"><?php echo $row["monto"];?></div>
            <div class="table-item"><?php echo $row["grupo"];?></div>
            <div class="table-item"><?php echo $row["telefono"];?></div>
            <div class="table-item">
                <a href="actualizar.php?id=<?php echo $row["id_usuario"];?>" class="table--item--link">edit</a>
            </div>
            <?php } mysqli_free_result($resultado); ?>
    </div>
</body>
</html>
