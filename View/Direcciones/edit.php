<html>
<head>
	<title>Libro de direcciones, bienvenido</title>
</head>
<body>
 <h4>Fernando Rojas Meléndez B56219 </h4>
<h5>Creación de una base de datos de direcciones orientada a archivos</h5>
<h1>Libro de direcciones</h1>
<p><a href="<?php echo $_SERVER['PHP_SELF']; ?>?action=liste">Ver los comentarios de los visitantes anteriores.</a></p>
  
  <form name="direccion" id="direccion" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <input name="action" type="hidden" value="guardoCambio" />
  <input name="id" type="hidden" value="<?php echo $vector['id']; ?>"/>
  <p>Este formulario le permite <b>actualizar</b> la direcci&oacute;n.</p>
  <p>Nombre:
    <input type="text" name="nombre" id="nombre" maxlength="50" value="<?php echo $vector['nombre']; ?>">
  </p>
  <p>Apellidos:
    <input type="text" name="apellidos" id="apellidos" maxlength="50" value="<?php echo $vector['apellidos']; ?>">
  </p>
  <p>Telefono Casa:
    <input type="text" name="telefonoCasa" id="telefonoCasa" maxlength="50" value="<?php echo $vector['telefonoCasa']; ?>">
  </p>
  <p>Direcci&oacute;n Casa:
    <input type="text" name="direccionCasa" id="direccionCasa" maxlength="50" value="<?php echo $vector['direccionCasa']; ?>">
  </p>
  <p>Telefono Trabajo:
    <input type="text" name="telefonoTrabajo" id="telefonoTrabajo" maxlength="50" value="<?php echo $vector['telefonoTrabajo']; ?>">
  </p>
  <p>Direcci&oacute;n Trabajo:
    <input type="text" name="direccionTrabajo" id="direccionTrabajo" maxlength="50" value="<?php echo $vector['direccionTrabajo']; ?>">
  </p>
  <p>Email:
    <input type="text" name="email" id="email" maxlength="50" value="<?php echo $vector['email']; ?>">
  </p>
  <p>
    <input name="Enviar" type="submit" id="Enviar" />
  </p>
</form>

<p><a href="<?php echo $_SERVER['PHP_SELF']; ?>?action=liste">Ver los comentarios de los visitantes anteriores.</a></p>
</body>
</html>