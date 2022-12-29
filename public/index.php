<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\LoginController;
use MVC\Router;
$router = new Router();

//Login 

$router->get('/', [LoginController::class, 'login']);
$router->post('/', [LoginController::class, 'login']);
$router->get('/Logout', [LoginController::class, 'logout']);

// Crear Cuenta - Create an Account

$router->get('/crear', [LoginController::class, 'crear']);
$router->post('/crear', [LoginController::class, 'crear']);

// Olvide mi password - Forgot My Password

$router->get('/olvide', [LoginController::class, 'olvide']);
$router->post('/olvide', [LoginController::class, 'olvide']);

// Restablecer - Reset Password

$router->get('/restablecer', [LoginController::class, 'restablecer']);
$router->post('/restablecer', [LoginController::class, 'restablecer']);

// Confirmación - Confirm Account

$router->get('/mensaje', [LoginController::class, 'mensaje']);
$router->get('/confirmar', [LoginController::class, 'confirmar']);




// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();