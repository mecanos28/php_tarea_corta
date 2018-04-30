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
  <input name="action" type="hidden" value="grabe" />
  <p>Este formulario le permite almacenar su direcci&oacute;n.</p>
  <p>Nombre:
    <input name="nombre" type="text" id="nombre" size="51" maxlength="50" />
  </p>
  <p>Apellidos:
    <input name="apellidos" type="text" id="apellidos" size="51" maxlength="50" />
  </p>
  <p>Telefono Casa:
    <input name="telefonoCasa" type="text" id="telefonoCasa" size="51" maxlength="50" />
  </p>
  <p>Direcci&oacute;n Casa:
    <input name="direccionCasa" type="text" id="direccionCasa" size="51" maxlength="50" />
  </p>
  <p>Telefono Trabajo:
    <input name="telefonoTrab" type="text" id="telefonoTrab" size="51" maxlength="50" />
  </p>
  <p>Direcci&oacute;n Trabajo:
    <input name="direccionTrab" type="text" id="direccionTrab" size="51" maxlength="50" />
  </p>
  <p>Email:
    <input name="email" type="text" id="email" size="51" maxlength="50" />
  </p>
  <p>
    <input name="Enviar" type="submit" id="Enviar" />
  </p>
</form>
<p><a href="<?php echo $_SERVER['PHP_SELF']; ?>?action=liste">Ver los comentarios de los visitantes anteriores.</a></p>
</body>
</html>