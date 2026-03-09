<?php
class Usuario {

    // Private attributes
    private string $nombre;
    private string $correo;

    public function __construct(string $nombre, string $correo) {
        $this->nombre = $nombre;
        $this->correo = $correo;
    }

    //  Getters
    public function getNombre(): string {
        return $this->nombre;
    }

    public function getCorreo(): string {
        return $this->correo;
    }

    //  Setters
    public function setNombre(string $nombre): void {
        $this->nombre = $nombre;
    }

    public function setCorreo(string $correo): void {
        $this->correo = $correo;
    }
}