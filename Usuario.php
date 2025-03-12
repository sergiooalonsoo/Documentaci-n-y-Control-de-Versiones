<?php

/**
 * Clase Usuario
 * 
 * Representa a un usuario del sistema.
 */
class Usuario {
    private string $nombre;
    private string $email;

    /**
     * Constructor de la clase Usuario
     *
     * @param string $nombre Nombre del usuario
     * @param string $email  Correo electrónico del usuario
     */
    public function __construct(string $nombre, string $email) {
        $this->nombre = $nombre;
        $this->email = $email;
    }

    /**
     * Obtiene el nombre del usuario
     *
     * @return string Nombre del usuario
     */
    public function getNombre(): string {
        return $this->nombre;
    }

    
}
