<!DOCTYPE html>
<html lang="es">
<head>
    <title>FORMULARIO DE REGISTRO</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<h1><?php
include(cs.php);
?></h1>
    <h1>FORMULARIO DE REGISTRO</h1>
    <form action="registrar.php" method="post" class="form_register" >
        <h2 class="form_titulo" >Crear una cuenta</h2>
        <div class="contenedor_inputs">
            <input type="text" name="nombres" placeholder="Nombres" class="input-48" required>
           <input type="text" name="apellidos" placeholder="apellidos" class="input-48" required>
            <input type="email" name="email" placeholder="email" class="input-100" required>
            <input type="int" name="monto" placeholder="monto" class="input-48" required>
            <input type="int" name="grupo" placeholder="grupo" class="input-48" required>
            <input type="int" name="telefono" placeholder="telefono" class="input-100" required>
            <input type="text" name="observacion" placeholder="observacion" class="input-100" required>
            <input type="submit" value="Registrar" class="btn-enviar" >
            <p>¿ya tienes una cuenta?<a href="">ingrese aqui</a> </p>
        </div>
        <a href="mostrar.php">mostrar</a>
        <a href="edicion.php">edicion</a>
    </form>
</body>
</html>
