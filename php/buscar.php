<?php
/*$operario= new Ajax();
$operario -> operarios();
$cliente= new Ajax();
$cliente -> clientes();*/

if(isset($_POST['consulta1']) ){
	$consulta = $_POST['consulta1'];

	switch($consulta){
		case 'consulta':
		operarios();
			break;
		case 'consulta1':
			clientes();
			break;
		case 'consulta2':
			rutas();
			break;
		case 'consulta3':
			recompensas();
			break;
		}

			
}



	function operarios(){
		error_reporting(E_ALL ^ E_NOTICE);
	$servername = "localhost";
    $username = "root";
  	$password = "";
  	$dbname = "recyclick";

	$conn = new mysqli($servername, $username, $password, $dbname);
      if($conn->connect_error){
        die("Conexión fallida: ".$conn->connect_error);
      }

    $salida = "";

    $query = "SELECT * FROM operario WHERE identificacion NOT LIKE '' ORDER By id LIMIT 25";

    if (isset($_POST['consulta'])) {
    	$q = $conn->real_escape_string($_POST['consulta']);
    	$query = "SELECT * FROM operario WHERE name LIKE '%$q%' OR lastname LIKE '%$q%' OR identificacion LIKE '%$q%' OR route LIKE '%$q%' OR vehicle LIKE '$q' OR telephone LIKE '%$q%' ";
    }

    $resultado = $conn->query($query);

    if ($resultado->num_rows>0) {
    	$salida.="<table border=1 class='tabla_datos'>
    			<thead>
    				<tr >
    					<td>Nombre</td>
    					<td>Apellido</td>
    					<td>Identificación</td>
    					<td>Ruta</td>
    					<td>Vehiculo</td>
						<td>Telefono</td>
						<td>Actualizar</td>
						<td>Inhabilitar</td>
    				</tr>

    			</thead>
    			

    	<tbody>";

    	while ($fila = $resultado->fetch_assoc()) {
    		$salida.="<tr>
    					<td>".$fila['name']."</td>
    					<td>".$fila['lastname']."</td>
    					<td>".$fila['identificacion']."</td>
    					<td>".$fila['route']."</td>
    					<td>".$fila['vehicle']."</td>
						<td>".$fila['telephone']."</td>
						<td><a href='../php/actualizaroperario.php?id=".$fila['identificacion']."'><img src='../media/actualizado.png' class='img-rounded'></td>
					    <td><a href='../php/admin.php?id=".$fila['identificacion']."&idb=2'><img src='../media/delete.png' class='img-rounded'></a></td>
    				  </tr>";

    	}
		$salida.="</tbody>
		</table>";

		
			
		
	}
	
	else{
		
		$salida.="
			<h2>Sin Resultados</h2>
			";
    }

    echo $salida;

    $conn->close();

	}

	function clientes(){
		error_reporting(E_ALL ^ E_NOTICE);
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "recyclick";
		$conn1 = new mysqli($servername, $username, $password, $dbname);
      		if($conn1->connect_error){
        		die("Conexión fallida: ".$conn1->connect_error);
      								 }

   		 $salida1 = "";

   		 $query1 = "SELECT * FROM cliente WHERE identificacion NOT LIKE '' ORDER By id LIMIT 25";

    		if (isset($_POST['consulta'])) {
    			$q1 = $conn1->real_escape_string($_POST['consulta']);
    			$query1 = "SELECT * FROM cliente WHERE name LIKE '%$q1%' OR lastname LIKE '%$q1%' OR identificacion LIKE '%$q1%' OR quantity LIKE '%$q1%' OR address LIKE '$q1' OR telephone LIKE '%$q1%' OR email LIKE '%$q1%' ";
    										}

   		 $resultado1 = $conn1->query($query1);

   			if ($resultado1->num_rows>0) {
    				$salida1.="<table border=1 class='tabla_datos'>
    					<thead>
    						<tr >
    							<td>Nombre</td>
    							<td>Apellido</td>
    							<td>Identificación</td>
    							<td>Cantidad</td>
								<td>Fecha</td>
								<td>Dirección</td>
								<td>Telefono</td>
								<td>Correo</td>
								<td>Actualizar</td>
								<td>Inhabilitar</td>
    						</tr>

    					</thead>
    			

    				<tbody>";

    		while ($fila1 = $resultado1->fetch_assoc()) {
    			$salida1.="<tr>
    					<td>".$fila1['name']."</td>
    					<td>".$fila1['lastname']."</td>
						<td>".$fila1['identificacion']."</td>
						<td>".$fila1['quantity']."</td>
						<td>".$fila1['date']."</td>
    					<td>".$fila1['address']."</td>
						<td>".$fila1['telephone']."</td>
						<td>".$fila1['email']."</td>
						<td><a href='../php/actualizaroperario.php?id=".$fila1['identificacion']."'><img src='../media/actualizado.png' class='img-rounded'></td>
					    <td><a href='../php/admin.php?id=".$fila1['email']."&idb=2'><img src='../media/delete.png' class='img-rounded'></a></td>
    				  </tr>";

    													}
				$salida1.="</tbody>
					</table>";
										}
	
			else{
				$salida1.="<h2>Sin Resultados</h2>";
		 		}

    		echo $salida1;

			$conn1->close();

						}

function rutas(){
	error_reporting(E_ALL ^ E_NOTICE);
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "recyclick";
	$conn1 = new mysqli($servername, $username, $password, $dbname);
		  if($conn1->connect_error){
			die("Conexión fallida: ".$conn1->connect_error);
								   }

		$salida1 = "";

		$query1 = "SELECT * FROM rutas WHERE id NOT LIKE '' ORDER By id LIMIT 25";

		if (isset($_POST['consulta'])) {
			$q1 = $conn1->real_escape_string($_POST['consulta']);
			$query1 = "SELECT * FROM rutas WHERE date LIKE '%$q1%' OR serie LIKE '%$q1%' OR lat LIKE '%$q1%' OR longtd LIKE '%$q1%'";
										}

		$resultado1 = $conn1->query($query1);

		   if ($resultado1->num_rows>0) {
				$salida1.="<table border=1 class='tabla_datos'>
					<thead>
						<tr >
							<td>Fecha</td>
							<td>Serie</td>
							<td>Latitud</td>
							<td>Longitud</td>
							<td>Actualizar</td>
							<td>Inhabilitar</td>
						</tr>

					</thead>
			

				<tbody>";

		while ($fila1 = $resultado1->fetch_assoc()) {
			$salida1.="<tr>
					<td>".$fila1['date']."</td>
					<td>".$fila1['serie']."</td>
					<td>".$fila1['lat']."</td>
					<td>".$fila1['longtd']."</td>
					<td><a href='../php/actualizaroperario.php?id=".$fila1['serie']."'><img src='../media/actualizado.png' class='img-rounded'></td>
					<td><a href='../php/admin.php?id=".$fila1['serie']."&idb=2'><img src='../media/delete.png' class='img-rounded'></a></td>
				  </tr>";

													}
			$salida1.="</tbody>
				</table>";
									}

		else{
			$salida1.="<h2>Sin Resultados</h2>";
			 }

		echo $salida1;

		$conn1->close();

				}
	function recompensas(){
		error_reporting(E_ALL ^ E_NOTICE);
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "recyclick";
		$conn1 = new mysqli($servername, $username, $password, $dbname);
			  if($conn1->connect_error){
				die("Conexión fallida: ".$conn1->connect_error);
									   }
	
			$salida1 = "";
	
			$query1 = "SELECT * FROM prizes WHERE id NOT LIKE '' ORDER By id LIMIT 25";
	
			if (isset($_POST['consulta'])) {
				$q1 = $conn1->real_escape_string($_POST['consulta']);
				$query1 = "SELECT * FROM prizes WHERE recompensa LIKE '%$q1%' OR peso LIKE '%$q1%' OR comentarios LIKE '%$q1%'";
											}
	
			$resultado1 = $conn1->query($query1);
	
			   if ($resultado1->num_rows>0) {
					$salida1.="<table border=1 class='tabla_datos'>
						<thead>
							<tr >
								<td>id</td>
								<td>Recompensa</td>
								<td>Peso</td>
								<td>Comentarios</td>
								<td>Actualizar</td>
								<td>Inhabilitar</td>
							</tr>
	
						</thead>
				
	
					<tbody>";
	
			while ($fila1 = $resultado1->fetch_assoc()) {
				$salida1.="<tr>
						<td>".$fila1['id']."</td>
						<td>".$fila1['recompensa']."</td>
						<td>".$fila1['peso']."</td>
						<td>".$fila1['comentarios']."</td>
						<td><a href='../php/actualizaroperario.php?id=".$fila1['peso']."'><img src='../media/actualizado.png' class='img-rounded'></td>
						<td><a href='../php/admin.php?id=".$fila1['peso']."&idb=2'><img src='../media/delete.png' class='img-rounded'></a></td>
					  </tr>";
	
														}
				$salida1.="</tbody>
					</table>";
										}
	
			else{
				$salida1.="<h2>Sin Resultados</h2>";
				 }
	
			echo $salida1;
	
			$conn1->close();
	}

?>
