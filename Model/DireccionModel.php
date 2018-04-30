<?php

/**
 * Modelo Visita.
 *
 */
class DireccionModel
{
	/**
	 * Constructor
	 */
	function __construct($id, $nombre, $apellidos, $telefonoCasa, $direccionCasa, $telefonoTrab, $direccionTrab, $email)
	{
    $this->id = $id;
		$this->nombre = $nombre;
		$this->apellidos = $apellidos;
		$this->telefonoCasa = $telefonoCasa;
    $this->direccionCasa = $direccionCasa;
    $this->telefonoTrab = $telefonoTrab;
    $this->direccionTrab = $direccionTrab;
		$this->email = $email;
	}

	function serialice(){
		return $this->id.':'.$this->nombre.':'.$this->apellidos.':'.$this->telefonoCasa.':'.$this->direccionCasa.':'.$this->telefonoTrab.':'.$this->direccionTrab.':'.$this->email;
      //str_replace("\n", '<br />',  str_replace("\r\n", '<br />', $this->comentario));
	}
}
