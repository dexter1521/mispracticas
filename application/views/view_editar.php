<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Welcome to CodeIgniter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<nav class="navbar navbar-primary">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Crud</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="<?php echo base_url() ?>">Home</a></li>
      <li><a href="<?php echo base_url('welcome/listar') ?>">Listar</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
</nav>

<body>
    <div class="container">
        <?php #print_r($preregistro); ?>
        
        <h2>Actualizar Datos de Participante</h2>
        <form action="<?php echo base_url('Welcome/update') ?>" method="post">
		<div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre"  name="nombre" value="<?php echo $preregistro[0]['nombre']; ?>">
            </div>
			<div class="form-group">
                <label for="apaterno">Apellido Paterno:</label>
                <input type="text" class="form-control" id="apaterno"  name="apaterno" value="<?php echo $preregistro[0]['apaterno']; ?>">
            </div>
			<div class="form-group">
                <label for="amaterno">Apellido Materno:</label>
                <input type="text" class="form-control" id="amaterno"  name="amaterno" value="<?php echo $preregistro[0]['amaterno']; ?>">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email"  name="email" value="<?php echo $preregistro[0]['correo']; ?>">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd"  name="pwd" value="<?php echo $preregistro[0]['contrasenia']; ?>">
            </div>
            <input type="hidden" name="id_preregistro" value="<?php echo $preregistro[0]['id_preregistro']; ?>">
            <button type="submit" class="btn btn-success">Guardar</button>
        </form>


    </div>


</body>

</html>