<h1 class="nombre-pagina">Crear cuenta</h1>
<p class="descripcion-pagina">Ingresar datos</p>

<?php 
    include_once __DIR__ . '/../templates/alertas.php';
?>

<form action="/crear-cuenta" class="formulario" method="POST">
    <div class="campo">
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" placeholder="Ingresa tu nombre" name="nombre" value="<?php echo s($usuario->nombre);?>">
    </div>
    <div class="campo">
        <label for="apellido">Apellido</label>
        <input type="text" id="apellido" placeholder="Ingresa tu apellido" name="apellido" value="<?php echo s($usuario->apellido);?>">
    </div>
    <div class="campo">
        <label for="telefono">Teléfono</label>
        <input type="tel" id="telefono" placeholder="Ingresa tu teléfono" name="telefono" value="<?php echo s($usuario->telefono);?>">
    </div>
    <div class="campo">
        <label for="email">E-mail</label>
        <input type="email" id="email" placeholder="Ingresa tu E-mail" name="email" value="<?php echo s($usuario->email);?>">
    </div>
    <div class="campo">
        <label for="password">Password</label>
        <input type="password" id="password" placeholder="Ingresa password" name="password">
    </div>

    <input type="submit" class="boton" value="Crear Cuenta">
</form>

<div class="acciones">
    <a href="/">¿Ya tienes una cuenta? Iniciar Sesión</a>
    <a href="/olvide">¿Olvidaste tu contraseña? ¡Es hora de recuperarla!</a>
</div>