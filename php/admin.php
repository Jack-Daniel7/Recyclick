<?php
session_start();
/*if (@!$_SESSION['user']) {
    header("Location:index.php");
}else*/
if ($_SESSION['rol']==2) {
	echo '<script>alert("No tienes los permisos Necesarios")</script> ';
	echo "<script>location.href='../php/operator.php'</script>";
	}
elseif ($_SESSION['rol']==0) {
	echo '<script>alert("No tienes los permisos Necesarios")</script> ';
	echo "<script>location.href='../php/cliente.php'</script>";
}
?>
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
<body>
	
	<nav class="nav">
		<a href="#inicio" class="marca">RecyClick</a>
		<ul id=menu class=menu>
		<li><a href="">Bienvenido <strong><?php echo $_SESSION['user'];?></strong> </a></li>
			<li data-menuanchor="Operarios" class='active'>
				<a href="#operarios">Operarios</a>
			</li>
			<li data-menuanchor="Clientes" >
					<a href="#clientes">Clientes</a>
			</li>
			<li data-menuanchor="Rutas">
						<a href="#rutas">Rutas</a>
			</li>
			<li data-menuanchor="Recompensas">
					<a href="#recompensas">Recompensas</a>
			</li>
			
			<li><a href="../php/desconectar.php"> Cerrar Sesión </a></li>

		</ul>
	</nav>
	<main id="fullpage">
		<section class="section uno" >
		
				<div class="formularioadmin">
					<h2> Administración de operarios registrados</h2>
					<h4>Lista de Operarios</h4>
					<div class="box">
  						<div class="container-3">
							  <span class="icon"><i class="fa fa-search"></i></span>
							  <a href="../php/agregaroperario.php" class="iconadd"><i class="fas fa-user-plus"></i></a>
      						<input type="search" name="caja_busqueda" id="caja_busqueda" placeholder="Search..." />
  						</div>
					</div>
					
				</div>
				<div id="datos"></div>
		
				   <?php
					   require("connect_db.php");
					   $sql=("SELECT * FROM operario");
					   $query=mysqli_query($mysqli,$sql);
					   extract($_GET);
					   if(@$idb==2){
						   $sqlbo="UPDATE `login` SET `state` = '0' WHERE `login`.`email` = '$id'";
						   $resbo=mysqli_query($mysqli,$sqlbo);
						   echo '<script>alert("OPERARIO INHABILITADO")</script> ';
						   //header('Location: proyectos.php');
						   echo "<script>location.href='../php/admin.php#operarios'</script>";
					   }
				
				   ?>
			 
		</section>

		<section class="section dos">
					<div class="formularioadmin">
						<h2> Administración de Clientes registrados</h2>
						<h4>Lista de Clientes</h4>
						<div class="box">
  								<div class="container-3">
							  		<span class="icon"><i class="fa fa-search"></i></span>
			
      								<input type="search" name="caja_busqueda_cliente" id="caja_busqueda_cliente" placeholder="Search..."/>
  								</div>
							</div>
				<!--	 	<div class="search-box">
						<input class="search-text" type="text" name="" placeholder="Buscar"> 
						<a class="search-btn" href="#">
						<i class="fa fa-search"></i>
						</a>  
						</div>-->
					</div>
					<div id="datos_cliente"></div>
		
				   <?php
					   require("connect_db.php");
					   $sql=("SELECT * FROM cliente");
					   $query=mysqli_query($mysqli,$sql);
					   extract($_GET);
					   if(@$idb==3){
						   $sqlbo="UPDATE `login` SET `state` = '0' WHERE `login`.`identificacion` = '$id'";
						   $resbo=mysqli_query($mysqli,$sqlbo);
						   echo '<script>alert("USUARIO INHABILITADO")</script> ';
						   //header('Location: proyectos.php');
						   echo "<script>location.href='admin.php'</script>";
					   }
				
				   ?>
			
		</section>
		<section class="section tres">
			<h2 id="prueba"> Administración de Rutas</h2>
					<h4>Lista de Rutas</h4>
					<div class="box">
  						<div class="container-3">
							  <span class="iconruta" ><i class="fa fa-search"></i></span>
							  <a href="#"  class="iconaddruta" id="prueba" ><i  class="fas fa-user-plus"></i></a>
      						<input type="search" name="caja_busqueda_rutas" id="caja_busqueda_rutas" placeholder="Search..." />
  						</div>
					</div>
					
				
					<div id="datos_rutas"></div>
					

		
				   <?php
					   require("connect_db.php");
					   $sql=("SELECT * FROM operario");
					   $query=mysqli_query($mysqli,$sql);
					   extract($_GET);
					   if(@$idb==2){
						   $sqlbo="UPDATE `login` SET `state` = '0' WHERE `login`.`serie` = '$id'";
						   $resbo=mysqli_query($mysqli,$sqlbo);
						   echo '<script>alert("OPERARIO INHABILITADO")</script> ';
						   //header('Location: proyectos.php');
						   echo "<script>location.href='../php/admin.php#operarios'</script>";
					   }
				
				   ?>
		</section>
		<section class="section cuatro">
				<h2> Sistema de Recompesas</h2>
					<h4>Lista de Condiciones</h4>
					<div class="box">
  						<div class="container-3">
							  <span class="iconruta"><i class="fa fa-search"></i></span>
							  <a href="../php/agregaroperario.php" class="iconaddruta"><i class="fas fa-user-plus"></i></a>
      						<input type="search" name="caja_busqueda_rutas" id="caja_busqueda_rutas" placeholder="Search..." />
  						</div>
					</div>
					
				
					<div id="datos_recompensas"></div>
		
				   <?php
					   require("connect_db.php");
					   $sql=("SELECT * FROM operario");
					   $query=mysqli_query($mysqli,$sql);
					   extract($_GET);
					   if(@$idb==2){
						   $sqlbo="UPDATE `login` SET `state` = '0' WHERE `login`.`quantity` = '$id'";
						   $resbo=mysqli_query($mysqli,$sqlbo);
						   echo '<script>alert("OPERARIO INHABILITADO")</script> ';
						   //header('Location: proyectos.php');
						   echo "<script>location.href='../php/admin.php#operarios'</script>";
					   }
				
				   ?>
		</section>
	</main>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.7/fullpage.js"></script>
	<script src="../js/jquery.min.js"></script>
	<script src="../js/admin.js"></script>
	<script src="../js/main.js"></script>
</body>
</html>
