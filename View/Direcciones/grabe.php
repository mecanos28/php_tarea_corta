<html>
<head>
	<title>Libro de direcciones, bienvenido</title>
</head>
<body>
<h4>Fernando Rojas Meléndez B56219 </h4>
<h5>Creación de una base de datos de direcciones orientada a archivos</h5>
<h1>Libro de direcciones</h1>
<p><?php echo $mensaje; ?><br />
<a href="<?php echo $_SERVER['PHP_SELF']; ?>?action=index">Insertar nueva dirección.</a><br />
<a href="<?php echo $_SERVER['PHP_SELF']; ?>?action=liste">Ver direcciones.</a></p>
</body>
</html>