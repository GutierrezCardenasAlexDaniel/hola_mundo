<?php
    include("cs.php");
    $id = $_GET["id"];
    $usuarios ="SELECT * FROM usuarios WHERE id_usuario ='$id'";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>panel de nueva edicion</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <form class="container-table container-table--edit" action="procesaractualiza.php" method="post">
        <div class="table-title">Datos del Registro <a href="edicion.php" class="table-edit">Edicion</a> </div>
       <br>
        <div class="table-header">Nombres</div>
        <div class="table-header">Apeliidos</div>
        <div class="table-header">Email</div>
        <div class="table-header">Monto</div>
        <div class="table-header">Grupo</div>
        <div class="table-header">Telefono</div>
        <div class="table-header">Operaciones</div>
        <?php $resultado= mysqli_query($conexion, $usuarios);
        while($row=mysqli_fetch_assoc($resultado)){?>
            <input type="hidden" class="table-item" value="<?php echo $row["id_usuario"];?>" name="id"><br>
            <input type="text" class="table-input" value="<?php echo $row["nombres"];?>" name="nombres">            
            <input type="text" class="table-input" value="<?php echo $row["apellidos"];?>" name="apellidos">
            <input type="text" class="table-input" value="<?php echo $row["email"];?>" name="email">
            <input type="text" class="table-input" value="<?php echo $row["monto"];?>" name="monto">
            <input type="text" class="table-input" value="<?php echo $row["grupo"];?>" name="grupo">
            <input type="text" class="table-input" value="<?php echo $row["telefono"];?>" name="telefono">
            <?php } mysqli_free_result($resultado); ?>
            <input type="submit" value="Actualizar" class="container-submit-actualizar">
    </form>
    <a href="mostrar.php"></a>
    <a href="edicion.php"></a>
</body>
</html>
