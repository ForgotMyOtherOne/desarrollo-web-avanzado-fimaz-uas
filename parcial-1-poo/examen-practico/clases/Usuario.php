<?php
/** The class Usuario allows you to save information of a User.
* @package Usuarios
*/
class Usuario {
    /** 
    * @var string $nombre Name of the Usuario
    * @var string $correo  Email of the Usuario
    */
    protected string $nombre;
    protected string $correo;
    /**
    * FUNCTION CONSTRUCT
    * when using it, this function uses FILTER_VALIDATE_EMAIL (built-in function in PHP) checks if the email format its valid
    * @var string $nombre Name of the usuario
    * @varstring $correo email of the usuario
    * @throws Exception if the input email its not the correct format
    */
    public function __construct(string $nombre, string $correo) {
        if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) { ; 
            throw new Exception("'$correo' es un correo invalido!");
        }
        $this->nombre = $nombre;
        $this->correo = $correo;
    }
    /** @return string Returns the Name of the user */
    public function getNombre(): string {
        return $this->nombre;
    }
    /** @return string Returns the email of the user */
    public function getCorreo(): string {
        return $this->correo;
    }
}