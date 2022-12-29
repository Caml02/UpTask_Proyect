<div class="contenedor olvide">
<?php include_once __DIR__ .'/../templates/nombre-sitio.php'; ?>

    <div class="contenedor-sm">
        <p class="descripcion-pagina">Recuperar Contraseña </p>
    
        <form action="/" class="formulario" method="POST">
            <div class="campo">
                <label for="email">Email</label>
                <input type="email"
                id="email"
                placeholder="Email"
                name="email">
            </div>

            <input type="submit" class="boton" value="Iniciar Sesión">
        </form>

        <div class="acciones">
            <a href="/crear">¿Aún No tienes cuenta? Crea Una</a>
            <a href="/">¿Ya tienes cuenta? Inicia Sesión</a>
        </div>

    </div> <!-- contenedor-sm -->
</div> <!-- contenedor-sm -->