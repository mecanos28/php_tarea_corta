<?php

/**
 * Modelo Libro.  Un libro de visitas tiene dos posibles métodos grabe y liste.
 *
 */
class LibroModel
{
  
  
	function liste()
	{
		$this->libro = array();
		$archivo = fopen('visitas.txt', 'r');
		while($registro = fgets($archivo))
		{
      if($registro !="\n"){
        $direccion = explode(':', $registro);
			  $this->libro[] = new DireccionModel($direccion[0], $direccion[1], $direccion[2], $direccion[3], $direccion[4], $direccion[5], $direccion[6], $direccion[7]);
      }
		} // while
		fclose($archivo);
		return $this->libro;
	}

	function grabe(DireccionModel $direccion)
	{
		$archivo = fopen('visitas.txt', 'a+');
		if (fwrite($archivo, $direccion->serialice()."\n"))
		{
			fclose($archivo);
			return true;
		}
		else
		{
			fclose($archivo);
			return false;
		}
	}
  
  function edit($id){
	$file = fopen('visitas.txt', 'r');
  while($registro = fgets($file))
		{
			$direccion = explode(':', $registro);
      if(strcmp($direccion[0], $id) == 0){
      $vector = array('id'=>$direccion[0], 'nombre'=>$direccion[1], 'apellidos' => $direccion[2], 'telefonoCasa' => $direccion[3], 'direccionCasa' => $direccion[4], 'telefonoTrabajo' => $direccion[5], 'direccionTrabajo' => $direccion[6], 'email' => $direccion[7]);
      fclose($file);
      return $vector;
      }
    }
  }
  
  function delete($id){
    $fileAsArray = array();
    $file = fopen('visitas.txt', 'r');
  while($registro = fgets($file))
		{
      if($registro !="\n"){
        $direccion = explode(':', $registro);
        if(strcmp($direccion[0], $id) != 0){
        $vector = array('id'=>$direccion[0], 'nombre'=>$direccion[1], 'apellidos' => $direccion[2], 'telefonoCasa' => $direccion[3], 'direccionCasa' => $direccion[4], 'telefonoTrabajo' => $direccion[5], 'direccionTrabajo' => $direccion[6], 'email' => $direccion[7]);
        array_push($fileAsArray, $vector);
        }
      }
    }
    fclose($file);
    $file = fopen('visitas.txt', 'w+');
    foreach($fileAsArray as $vector){
      $direccionameter = new DireccionModel($vector['id'], $vector['nombre'], $vector['apellidos'], $vector['telefonoCasa'], $vector['direccionCasa'], $vector['telefonoTrabajo'], $vector['direccionTrabajo'], $vector['email']);
      fwrite($file, $direccionameter->serialice()."\n");
    }
    fclose($file);
    return 'Se elminó el usuario.';
   }
  
  

  function guardoCambio($vector){
      $this->delete($vector['id']);
      $file = fopen('visitas.txt', 'a+');
      $direccionameter = new DireccionModel($vector['id'], $vector['nombre'], $vector['apellidos'], $vector['telefonoCasa'], $vector['direccionCasa'], $vector['telefonoTrabajo'], $vector['direccionTrabajo'], $vector['email']);
      if (fwrite($file, $direccionameter->serialice()."\n") > 0)
      {
        fclose($file);
        return 'Sus datos han sido actualizado satisfactoriamente.';
      }
      else
      {
        fclose($file);
        return 'Sus datos no se actualizaron, vuelva a intentarlo.';
      }

  }
}
