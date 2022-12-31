<?php

namespace Controllers; 
use MVC\Router;
use Model\Usuario;

class LoginController {
    public static function login(Router $router) {
        $alertas = [];
        if($_SERVER['REQUEST_METHOD'] === 'POST') {

        }

        //Render de la vista
        $router->render('auth/login', [
            'titulo' => 'Iniciar Sesión'
        ]);
    }

    public static function logout() {
        echo "Desde logout";
    }

    public static function crear(Router $router) {
        $alertas = [];
        $usuario = new Usuario;
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $usuario -> sincronizar($_POST);
            $alertas = $usuario -> validarNuevaCuenta();
        }

        //Render de la vista
        $router->render('auth/crear', [
            'titulo' => 'Crear Cuenta',
            'usuario' => $usuario,
            'alertas' => $alertas
        ]);

    }

    public static function olvide(Router $router) {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
        
        }
        //Render de la vista
        $router->render('auth/olvide', [
            'titulo' => 'Recuperar Contraseña'
        ]);
    }

    public static function restablecer() {
        echo "restablecer";

        if($_SERVER['REQUEST_METHOD'] === 'POST') {

        }
    }

    public static function mensaje() {
        echo "mensaje";

        if($_SERVER['REQUEST_METHOD'] === 'POST') {

        }
    }

    public static function confirmar() {
        echo "confirmar";

        if($_SERVER['REQUEST_METHOD'] === 'POST') {

        }
    }

}

