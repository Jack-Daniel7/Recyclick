<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administración</title>
   <script src="https://kit.fontawesome.com/8b93d6230e.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700|Oswald&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.7/fullpage.css">
	<link rel="stylesheet" href="../css/estilos.css">
</head>
<body id="actualizar"> 
       
    <nav class="nav">
		<a href="#inicio" class="marca">RecyClick</a>
		<ul id=menu class=menu>
			<li data-menuanchor="Recompensas">
					<a href="../php/admin.php#operarios">Volver</a>
			</li>
			
			<li><a href="../php/desconectar.php"> Cerrar Sesión </a></li>

		</ul>
	</nav>
		<form action="../php/agregaroperariopost.php" method="post" class="form">
        
        <div class="field-wrap">
          <h1>Agregar Operario</h1>
        </div>
        <div class="field-wrap">
          <label id="actualizar">Nombre<span class="req"></span></label>
          <input type="text" name="name" value="">
        </div>
        <div class="field-wrap">
          <label id="actualizar">Apellido<span class="req"></span></label>
          <input type="text" name="lastname" value="">
        </div>
        <div class="field-wrap">
          <label id="actualizar">Correo<span class="req"></span></label>
          <input type="email" name="email" value="">
        </div>
        <div class="field-wrap">
          <label id="actualizar">Contraseña<span class="req"></span></label>
          <input type="text" name="pass" value="">
        </div>
        <div class="field-wrap">
          <label id="actualizar">Identificación<span class="req"></span></label>
          <input type="text" name="identificacion" value="">
        </div>
        <div class="field-wrap">
          <label id="actualizar">Direccion<span class="req"></span></label>
          <input type="text" name="address" value="">
        </div>
        <div class="field-wrap">
          <label id="actualizar">Telefono<span class="req"></span></label>
          <input type="text" name="telephone" value="">
        </div>
        <div class="field-wrap">
          <label id="actualizar">Ruta<span class="req"></span></label>
          <input type="text" name="route" value="">
         </div>
        <div class="field-wrap">
          <label id="actualizar">Vehiculo<span class="req"></span></label>
          <input type="text" name="vehicle" value="">
    
          <button type="submit" class="button button-block">Guardar</button>
          </div>	
		</form>
</body>
</html>