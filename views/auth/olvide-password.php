<h1 class="nombre-pagina">Recuperar Contraseña</h1>
<p class="descripcion-pagina">Ingresar los datos solicitados para reestablecer la contraseña</p>

<?php 
    include_once __DIR__ . '/../templates/alertas.php';
?>

<form action="/olvide" class="formulario" method="POST">
    <div class="campo">
        <label for="email">E-mail</label>
        <input type="email" id="email" placeholder="Ingresa tu E-mail" name="email">
    </div>

    <input type="submit" class="boton" value="Recibir instrucciones">
</form>

<div class="acciones">
    <a href="/">¿Ya tienes una cuenta? Iniciar Sesión</a>
    <a href="/crear-cuenta">¿Aún no tienes una cuenta? ¡A crear!</a>
</div>