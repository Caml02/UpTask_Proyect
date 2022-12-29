<div class="contenedor login">
<?php include_once __DIR__ .'/../templates/nombre-sitio.php'; ?>

    <div class="contenedor-sm">
        <p class="descripcion-pagina">Iniciar Sesión </p>
    
        <form action="/" class="formulario" method="POST">
            <div class="campo">
                <label for="email">Email</label>
                <input type="email"
                id="email"
                placeholder="Email"
                name="email">
            </div>

            <div class="campo">
                <label for="password">Contraseña</label>
                <input type="password"
                id="password"
                placeholder="Tu contraseña"
                name="password">
            </div>

            <input type="submit" class="boton" value="Iniciar Sesión">
        </form>

        <div class="acciones">
            <a href="/crear">¿Aún No tienes cuenta? Crea Una</a>
            <a href="/olvide">¿Olvidaste tu contraseña?</a>
        </div>

    </div> <!-- contenedor-sm -->
</div> <!-- contenedor-sm -->