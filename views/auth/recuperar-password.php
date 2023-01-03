<h1 class="nombre-pagina">Recuperar Contraseña</h1>
<p class="descripcion-pagina">Ingresa tu nueva Contraseña a continuación :</p>

<?php 
    include_once __DIR__ . '/../templates/alertas.php';
?>

<?php if($error) return;?>

<form class="formulario" method="POST">
    <div class="campo">
    <label for="password">Contraseña</label>
    <input type="password" id="password" name="password" placeholder="Tu nueva contraseña"/>

    </div>

    <input type="submit" class="boton" value="Guardar Nueva Contraseña">

</form>

<div class="acciones">
    <a href="/">¿Ya tienes una cuenta? Iniciar Sesión</a>
    <a href="/crear-cuenta">¿Aún no tienes una cuenta? ¡A crear!</a>
</div>