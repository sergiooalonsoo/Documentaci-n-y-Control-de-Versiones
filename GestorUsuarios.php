<?php
class GestorUsuarios {
    private array $usuarios = [];

    /**
     * Agrega un usuario al sistema
     *
     * @param Usuario $usuario Objeto usuario a agregar
     */
    public function agregarUsuario(Usuario $usuario): void {
        $this->usuarios[] = $usuario;
    }

    /**
     * Lista todos los usuarios registrados
     *
     * @return array Lista de usuarios
     */
    public function listarUsuarios(): array {
        return $this->usuarios;
    }
}

/**
 * Función principal
 * 
 * Ejecuta una prueba creando usuarios y listándolos.
 */
function main() {
    $gestor = new GestorUsuarios();
    $gestor->agregarUsuario(new Usuario("Juan Pérez", "juan@example.com"));
    $gestor->agregarUsuario(new Usuario("Ana Gómez", "ana@example.com"));

    foreach ($gestor->listarUsuarios() as $usuario) {
        echo "Usuario: " . $usuario->getNombre() . "\n";
    }
}

// Ejecutar la función principal
main();

?>

?>