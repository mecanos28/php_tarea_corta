<?php

define('DS', DIRECTORY_SEPARATOR);
define('TEMPLATE_DIR', 'View' . DS);
define('BASE_DIR', getcwd() . DS);

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/vendor/adodb/adodb-php/adodb-active-record.inc.php';

$db = NewADOConnection('postgres9://eb56219:eb56219@localhost/ci2413');
$dictionary = NewDataDictionary($db);
$dictionary->SetSchema('eb56219');
$db->Execute('SET search_path TO eb56219');
ADOdb_Active_Record::SetDatabaseAdapter($db);
$db->debug = FALSE; // Si se cambia FALSE por TRUE se activa el despliegue de las consultas.

// Ac� deber�a haber alg�n tipo de boostrapping o un llamado a una clase que
// se encargue de hacerlo.
//
// Ver un ejemplo en:  http://phpsnaps.com/snaps/view/bootstrap-php-code/
//
// Por supuesto, adaptado a la estructura que estamos manejando.

spl_autoload_register(
	function ($class)
	{
		preg_match('/^(?<name>\w+)(?<function>(Controller|Model)){1}$/', $class, $matches);
		switch (@$matches['function']) {
			case 'Controller':
				require_once('Controller' . DS . $class . '.php');
				break;
			case 'Model':
				require_once('Model' . DS . $class . '.php');
				break;
			default:
				require_once('Ekeke' . DS . $class . '.class.php');
		} // switch
	}
);

$DireccionesController = new DireccionesController();
?>