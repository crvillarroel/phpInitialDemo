<?php
    class UserModel {
        public function __construct(){
            //$this->db=Conectar::conexion();
        }
        public function get_users(){

            $users = [
                array(
                    'name'  => 'Carlos',
                    'age' => '36'
                ),
                array(
                    'name'  => 'Stefano',
                    'age' => 'Desconocida'
                ),
                array(
                    'name'  => 'Otro nombre',
                    'age' => 'Desconocida'
                )
            ];

            return $users;
        }
    }
?>