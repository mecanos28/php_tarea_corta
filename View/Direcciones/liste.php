<html>
<head>
	<title>Libro de direcciones, bienvenido</title>
</head>
<body>
 <h4>Fernando Rojas Meléndez B56219 </h4>
<h5>Creación de una base de datos de direcciones orientada a archivos</h5>
<h1>Libro de Visitas</h1>
<p><a href="<?php echo $_SERVER['PHP_SELF']; ?>?action=index">Enviar una nueva direccion.</a></p>

    
<table>
						<thead>
							<tr>
                <th>Fecha</th>
								<th>Nombre</th>
								<th>Apellidos</th>
								<th>Telefono de la casa</th>
								<th>Direccion de la casa</th>
								<th>Telefono del trabajo</th>
								<th>Direccion del trabajo</th>
								<th>Correo electronico</th>
								<th colspan=2>Acciones</th>
							</tr>
						</thead>
						<tbody>
							<?php
							foreach ($direcciones as $direccion)
							{
								?>
								<tr>
                  <td><?php echo $direccion->id; ?></td>
									<td><?php echo $direccion->nombre; ?></td>
									<td><?php echo $direccion->apellidos; ?></td>
                  <td><?php echo $direccion->telefonoCasa; ?></td>
                  <td><?php echo $direccion->direccionCasa; ?></td>
                  <td><?php echo $direccion->telefonoTrab; ?></td>
                  <td><?php echo $direccion->direccionTrab; ?></td>
                  <td><?php echo $direccion->email; ?></td>
									<td><a href="<?php echo $_SERVER['PHP_SELF']; ?>?action=edit&id=<?php echo $direccion->id;?>">Editar</a></td>
									<td><a href="<?php echo $_SERVER['PHP_SELF']; ?>?action=delete&id=<?php echo $direccion->id;?>">Eliminar</a></td>
								</tr>
								<?php
							}
							?>
						</tbody>
</table>
  
<p><a href="<?php echo $_SERVER['PHP_SELF']; ?>?action=index">Enviar una nueva direccion.</a></p>
</body>
</html>