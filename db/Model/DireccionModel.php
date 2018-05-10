<?php

/**
 * Modelo Visita.
 *
 */


class DireccionModel extends ADODB_Active_Record
{
  public $_table = 'eb56219_addresses';
	/**
	 * Constructor
	 */
// 	function __construct($id, $nombre, $apellidos, $telefonoCasa, $direccionCasa, $telefonoTrab, $direccionTrab, $email)
// 	{
//     $this->id = $id;
// 		$this->nombre = $nombre;
// 		$this->apellidos = $apellidos;
// 		$this->telefonoCasa = $telefonoCasa;
//     $this->direccionCasa = $direccionCasa;
//     $this->telefonoTrab = $telefonoTrab;
//     $this->direccionTrab = $direccionTrab;
// 		$this->email = $email;
// 	}
  
  function __construct() {
    parent::__construct();
    $row = $GLOBALS['db']->GetRow("SELECT nextval('eb56219_addresses_id_seq'::regclass) AS id");
    $this->id = $row['id'];
  }

}
