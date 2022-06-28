<h1 class="nombre-pagina">Reestablecer Password</h1>
<p class="descripcion-pagina">Coloca tu nuevo Password a continuación</p>

<?php include_once __DIR__ . "/../templates/alertas.php"; ?>
<?php if($error) return null; ?>

<form method="POST" class="formulario">
    <div class="campo">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Tu Nuevo Password">
    </div>
    <input type="submit" class="boton" value="Guardar Nuevo Password">
</form>

<div class="acciones">
    <a href="/">Iniciar Sesión</a>
    <a href="/crear-cuenta">Crear Cuenta</a>
</div>