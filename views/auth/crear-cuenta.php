<h1 class="nombre-pagina">crear cuenta</h1>
<p class="descripcion-pagina">Llena el formulario para crearte una cuenta</p>

<?php include_once __DIR__ . "/../templates/alertas.php"; ?>

<form action="/crear-cuenta" method="POST" class="formulario">
    <div class="campo">
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" placeholder="Dime Tu Nombre"
        value="<?php echo s($usuario->nombre); ?>">
    </div>

    <div class="campo">
        <label for="apellido">Apellido</label>
        <input type="text" id="apellido" name="apellido" placeholder="Ahora Tu Apellido" value="<?php echo s($usuario->apellido); ?>">
    </div>

    <div class="campo">
        <label for="telefono">Teléfono</label>
        <input type="tel" id="telefono" name="telefono" placeholder="Tu Número de Teléfono" value="<?php echo s($usuario->telefono); ?>">
    </div>

    <div class="campo">
        <label for="email">E-Mail</label>
        <input type="email" id="email" name="email" placeholder="Y tu E-Mail" value="<?php echo s($usuario->email); ?>">
    </div>
    
    <div class="campo">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Elige una Contraseña">
    </div>

    <input type="submit" value="Crear Cuenta" class="boton">
</form>

<div class="acciones">
    <a href="/">Volver</a>
    <a href="/olvide">Olvidé mi Password</a>
</div>