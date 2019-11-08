<?php
session_start();
/*if (@!$_SESSION['user']) {
    header("Location:index.php");
}else*/
if ($_SESSION['rol']==2) {
	echo '<script>alert("No tienes los permisos Necesarios")</script> ';
	echo "<script>location.href='../php/operator.php'</script>";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cliente</title>
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
			<li data-menuanchor="uno" class='active'>
				<a href="#uno">Uno</a>
			</li>
			<li data-menuanchor="dos" >
					<a href="#dos">Dos</a>
			</li>
			<li data-menuanchor="tres">
						<a href="#tres">Tres</a>
			</li>
			<li data-menuanchor="cuatro">
					<a href="#cuatro">Cuatro</a>
			</li>
			
			<li><a href="../php/desconectar.php"> Cerrar Sesión </a></li>

		</ul>
	</nav>
<main id="fullpage">
<section class="section uno">
hjhh
</section>

<section class="section dos">
hjhhjkjhkh
</section>
<section class="section tres">
hjhhjkjhkh
</section>
<section class="section cuatro">
hjhhjkjhkh
</section>
</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.7/fullpage.js"></script>
<script src="../js/client.js"></script>
    
</body>
</html>