<h1 class="nombre-pagina">Login</h1>
<p class="descripcion-pagina">Inicia Sesión con Tus Datos</p>

<?php include_once __DIR__ . "/../templates/alertas.php"; ?>

<form action="/" method="POST" class="formulario">
    <div class="campo">
        <label for="email">E-Mail</label>
        <input type="email" id="email" placeholder="Tu E-Mail" name="email" value="<?php echo s($auth->email); ?>">
    </div>
    <div class="campo">
        <label for="password">Password</label>
        <input type="password" id="password" placeholder="Tu Password" name="password">
    </div>

    <input type="submit" class="boton" value="Iniciar Sesión">
</form>

<div class="acciones">
    <a href="/crear-cuenta">Aún no tenes una cuenta? Create una!</a>
    <a href="/olvide">Olvidé mi Password</a>
</div>
