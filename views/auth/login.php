<h1 class="nombre-pagina">Log in</h1>
<p class="descripcion-pagina">Iniciar Sesión</p>

<?php 
    include_once __DIR__ . '/../templates/alertas.php';
?>

<form action="/" class="formulario" method="POST">
    <div class="campo">
        <label for="email">E-mail</label>
        <input type="email" id="email" placeholder="Ingresa tu email" name="email" value="<?php echo s($auth->email); ?>">
    </div>
    <div class="campo">
        <label for="password">Password</label>
        <input type="password" id="password" placeholder="Ingresa tu password" name="password">
    </div>
    <input type="submit" class="boton" value="Iniciar Sesión">
</form>

<div class="acciones">
    <a href="/crear-cuenta">¿Aún no tienes una cuenta? ¡A crear!</a>
    <a href="/olvide">¿Olvidaste tu contraseña? ¡Es hora de recuperarla!</a>
</div>