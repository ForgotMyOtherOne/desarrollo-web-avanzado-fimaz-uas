<?php
/** The class Admin inherits from the class Usuario.
* @package Admin
*/
require_once 'Usuario.php';

class Admin extends Usuario {
    /** @return string Returns Rol Administrador */
    public function getRol(): string {
        return "Administrador";
    }
}