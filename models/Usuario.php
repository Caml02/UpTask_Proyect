<?php

namespace Model;


class usuario extends ActiveRecord {
        protected static $tabla = 'usuario';
        protected static $columnasDB =  ['id', 'nombre',
        'email', 'password', 'confirmado', 'token'];

        public $id;
        public $nombre;
        public $email;
        public $password;
        public $confirmado;
        public $token;

        public function __construct($args = []) {
            
             $this->id = $args['id']?? null;
             $this->nombre = $args['nombre']?? '';
             $this->email = $args['email']?? '';
             $this->password = $args['password']?? '';
             $this->password2 = $args['password2']?? '';
             $this->confirmado = $args['confirmado']?? '0';
             $this->token = $args['token']?? '';
         }


//Método de validación

    public function validarNuevaCuenta() {
        if(!$this->nombre) {
            self::$alertas['error'][] = 'El Nombre es Obligatorio';
            } 
        if(!$this->email) {
            self::$alertas['error'][] = 'El E-mail es Obligatorio';
            }
        if(!$this->password) {
            self::$alertas['error'][] = 'La Contraseña es Obligatorio';
            }
    
        if (strlen($this->password) < 6){
            self::$alertas['error'][] = 'La contraseña debe tener al menos 6 caracteres';
            }
        if($this->password !== $this->password2) {
            self::$alertas['error'][] = 'Las contraseñas deben coincidir';
            }
            return self::$alertas;
    }
}

