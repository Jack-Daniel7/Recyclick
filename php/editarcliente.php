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
<?php
		extract($_GET);
		require("connect_db.php");

		$sql="SELECT * FROM cliente WHERE identificacion=$id";
	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
        $ressql=mysqli_query($mysqli,$sql);
		while ($row=mysqli_fetch_row ($ressql)){
		    	$id=$row[0];
		    	$name=$row[1];
		    	$lastname=$row[2];
                $identificacion=$row[3];
		    	$quantity=$row[4];
                $date=$row[5];
                $address=$row[6];
                $telephone=$row[7];
				$email=$row[8];
		    }



		?>
    <nav class="nav">
		<a href="#inicio" class="marca">RecyClick</a>
		<ul id=menu class=menu>
			<li data-menuanchor="Recompensas">
					<a href="../php/admin.php#operarios">Volver</a>
			</li>
			
			<li><a href="../php/desconectar.php"> Cerrar Sesión </a></li>

		</ul>
	</nav>
		<form action="ejecutaactualizar.php" method="post" class="form">
        
        <div class="field-wrap">
          <label id="actualizar">Id<span class="req"></span></label>
          <input type="text" name="id" value= "<?php echo $id ?>" readonly="readonly">
        </div>
        <div class="field-wrap">
          <label id="actualizar">Nombre<span class="req"></span></label>
          <input type="text" name="user" value="<?php echo $name?>">
        </div>
        <div class="field-wrap">
          <label id="actualizar">Apellido<span class="req"></span></label>
          <input type="text" name="pass" value="<?php echo $lastname?>">
        </div>
        <div class="field-wrap">
          <label id="actualizar">Cantidad Reciclada<span class="req"></span></label>
          <input type="text" name="email" value="<?php echo $quantity?>">
        </div>
        <div class="field-wrap">
          <label id="actualizar">Fecha de Afiliación<span class="req"></span></label>
          <input type="text" name="pasadmin" value="<?php echo $date?>">
        </div>
        <div class="field-wrap">
          <label id="actualizar">Dirección<span class="req"></span></label>
          <input type="text" name="rol" value="<?php echo $address?>">
         </div>
        <div class="field-wrap">
          <label id="actualizar">telefono<span class="req"></span></label>
          <input type="text" name="estado" value="<?php echo $telephone?>">
        </div>
        <div class="field-wrap">
          <label id="actualizar">email<span class="req"></span></label>
          <input type="text" name="rol" value="<?php echo $email?>">
          <button type="submit" class="button button-block">Guardar</button>
          </div>	
		</form>
</body>
</html>