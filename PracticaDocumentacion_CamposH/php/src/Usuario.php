<?php

/**
 * Clase Usuario
 *
 * Esta clase representa un usuario dentro del sistema.
 *
 * @package App
 */
class Usuario
{
    /**
     * ID único del usuario.
     *
     * @var int
     */
    private int $id;

    /**
     * Nombre del usuario.
     *
     * @var string
     */
    private string $nombre;

    /**
     * Crea un nuevo usuario.
     *
     * @param int $id ID del usuario.
     * @param string $nombre Nombre del usuario.
     */
    public function __construct(int $id, string $nombre)
    {
        $this->id = $id;
        $this->nombre = $nombre;
    }

    /**
     * Obtiene el nombre del usuario.
     *
     * @return string Nombre del usuario.
     */
    public function getNombre(): string
    {
        return $this->nombre;
    }

    /**
     * Establece un nuevo nombre.
     *
     * @param string $nombre Nuevo nombre del usuario.
     * @return void
     */
    public function setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }
}
