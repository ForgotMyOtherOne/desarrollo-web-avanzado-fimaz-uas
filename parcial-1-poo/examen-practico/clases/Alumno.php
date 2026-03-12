<?php
/** The class Alumno inherits from the class Usuario.
* @package Alumno
*/
require_once 'Usuario.php';

class Alumno extends Usuario {
    /**
     * @var string $matricula The registration string of the Alumno.
     */
    private string $matricula;
/**
    * FUNCTION CONSTRUCT
    * it uses parent::__construct to call the already done __construct from the Usuario class
    * @param string $nombre Name of the Alumno 
    * @param string $correo Email of the Alumno 
    * @param string $matricula The registration string of the Alumno.
    */
    public function __construct(string $nombre, string $correo, string $matricula) {
        parent::__construct($nombre, $correo);
        $this->matricula = $matricula;
    }
    /** @return string Returns registration of the Alumno */
    public function getMatricula(): string {
        return $this->matricula;
    }
    /** @return string Returns the Rol Alumno */
    public function getRol(): string {
        return "Alumno";
    }
}