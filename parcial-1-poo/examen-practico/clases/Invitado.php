<?php
/** The class Invitado inherits from the class Usuario.
* @package Invitado
*/
require_once 'Usuario.php';

class Invitado extends Usuario {
    /**
     * @var string $empresa Name of the company the Invitado works for.
     */
    private string $empresa;
    /**
    * FUNCTION CONSTRUCT
    * it uses parent::__construct to call the already done __construct from the Usuario class
    * @param string $nombre Name of the Invitado
    * @param string $correo Email of the Invitado 
    * @param string $empresa Company the Invitado works for
    */
    public function __construct(string $nombre, string $correo, string $empresa) {
        parent::__construct($nombre, $correo);
        $this->empresa = $empresa;
    }
    /** @return string Name of the company the Invitado works for*/
    public function getEmpresa(): string {
        return $this->empresa;
    }
    /** @return string Rol Invitado*/
    public function getRol(): string {
        return "Invitado";
    }
}