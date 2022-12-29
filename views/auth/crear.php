<div class="contenedor crear">
    <?php include_once __DIR__ .'/../templates/nombre-sitio.php'; ?>

    <div class="contenedor-sm">
        <p class="descripcion-pagina">Crea tu cuenta </p>
    
        <form action="/" class="formulario" method="POST">
                <div class="campo">
                    <label for="nombre">Nombre</label>
                    <input type="text"
                    id="nombre"
                    placeholder="Escribe tu nombre"
                    name="nombre">
                </div>
        
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

            <div class="campo">
                <label for="password2">Confirmar Contraseña</label>
                <input type="password"
                id="password2"
                placeholder="Confirmar contraseña"
                name="password2">
            </div>

            <input type="submit" class="boton" value="Crear Cuenta">
        </form>

        <div class="acciones">
            <a href="/">¿Ya tienes cuenta? Inicia Sesión</a>
            <a href="/olvide">¿Olvidaste tu contraseña?</a>
        </div>

    </div> <!-- contenedor-sm -->
</div> <!-- contenedor-sm -->