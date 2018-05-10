<?php

/**
 * Modelo Libro.  Un libro de visitas tiene dos posibles métodos grabe y liste.
 *
 */
class LibroModel
{
  function guardoCambio($vector){
    $direccion = new DireccionModel();
    $direccion = $direccion->find('id='.$vector['id']);
    $direccion = $direccion[0];
    $direccion->nombre = $vector['nombre'];
    $direccion->apellidos = $vector['apellidos'];
    $direccion->telefono_casa = $vector['telefonoTrabajo'];
    $direccion->direccion_casa = $vector['direccionCasa'];
    $direccion->telefono_trabajo = $vector['telefonoTrabajo'];
    $direccion->direccion_trabajo = $vector['direccionTrabajo'];
    $direccion->correo = $vector['email'];
    if ($direccion->save())
      {
        return 'El contacto se editó correctamente.';
      }
      else
      {
        return 'El contacto no se logró editar corractamente.';
      }

  }
  
	function liste()
	{
		$direccion = new DireccionModel();
		$this->libro = $direccion->find('1=1');
		return $this->libro;
	}

	function grabe(DireccionModel $direccion)
	{
    $direccion->save();
    return true;
    
// 		$archivo = fopen('direcciones.txt', 'a+');
// 		if (fwrite($archivo, $direccion->serialice()."\n"))
// 		{
// 			fclose($archivo);
// 			return true;
// 		}
// 		else
// 		{
// 			fclose($archivo);
// 			return false;
// 		}
	}
  
  function edit($id){
	  $direccion = new DireccionModel();
    $direccion = $direccion->find('id='.$id);
    $direccion = $direccion[0];
    $vector =  array( 'id'=>$direccion->id, 'nombre'=>$direccion->nombre, 'apellidos' => $direccion->apellidos, 'telefonoCasa'=>$direccion->telefono_casa,
                      'direccionCasa'=>$direccion->direccion_casa, 'telefonoTrabajo'=>$direccion->telefono_trabajo, 'direccionTrabajo'=>$direccion->direccion_trabajo, 'email'=>$direccion->email);
    return $vector;  
  }
  
  function delete($id){
    $direccion = new DireccionModel();
    $direccion = $direccion->find('id='.$id);
    $direccion = $direccion[0];
    $direccion->delete();
    return 'Se elminó el usuario.';
   }
  
  

  
}
