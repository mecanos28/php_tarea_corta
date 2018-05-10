<?php

/*
 * Controlador de visitas
 *
 */
class DireccionesController extends Controller {
	function index()
	{
    $this->view->assign('direcciones', null);
	}

	function liste()
	{
		$libro = new LibroModel();
		$this->view->assign('direcciones', $libro->liste());
	}

	function grabe()
	{
    $fecha = date("Y.m.d")."-".date("h.i.sa");
		$libro = new LibroModel();
		//$direccion = new DireccionModel($id, $_POST['nombre'], $_POST['apellidos'], $_POST['telefonoCasa'], $_POST['direccionCasa'], $_POST['telefonoTrab'], $_POST['direccionTrab'], $_POST['email']);
    $direccion = new DireccionModel;
    $direccion->fecha = $fecha;
    $direccion->nombre = $_POST['nombre'];
    $direccion->apellidos =  $_POST['apellidos'];
    $direccion->telefono_casa = $_POST['telefonoCasa'];
    $direccion->direccion_casa =  $_POST['direccionCasa'];
    $direccion->telefono_trabajo = $_POST['telefonoTrab'];
    $direccion->direccion_trabajo =  $_POST['direccionTrab'];
    $direccion->email = $_POST['email'];
    
    if ($libro->grabe($direccion))
		{
			$this->view->assign('mensaje', 'Su comentario ha sido recibido satisfactoriamente.');
		}
		else
		{
			$this->view->assign('mensaje', 'Su comentario no se pudo guardar.');
		}
	}
  
  function edit()
	{
		if(isset($_GET['id'])){
      $libro = new LibroModel();
			$this->view->assign('vector', $libro->edit($_GET['id']));
		}
	}
  
  function guardoCambio(){
    $libro = new LibroModel();
		$this->view->assign('mensaje', $libro->guardoCambio($_POST));
	}
  
  function delete()
	{
		if(isset($_GET['id'])){
      $libro = new LibroModel();
			$this->view->assign('mensaje', $libro->delete($_GET['id']));
		}
	}
  
}