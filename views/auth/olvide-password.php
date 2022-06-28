<h1 class="nombre-pagina">Olvidé mi Password</h1>
<p class="descripcion-pagina">Escribe tu E-Mail para reestablecer tu Password</p>

<?php include_once __DIR__ . "/../templates/alertas.php"; ?>

<form action="/olvide" method="POST" class="formulario">
    <div class="campo">
        <label for="email">E-Mail</label>
        <input type="email" id="email" name="email" placeholder="Escribe tu E-Mail">
    </div>

    <input type="submit" class="boton" value="Enviar Instrucciones">
</form>

<div class="acciones">
    <a href="/crear-cuenta">Aún no tenes una cuenta? Create una!</a>
    <a href="/">Volver</a>
</div>