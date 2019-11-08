<?php

    $name=$_POST['name'];
    $lastname=$_POST['lastname'];
    $identificacion=$_POST['identificacion'];
    $address=$_POST['address'];
    $telephone=$_POST['telephone'];
	$mail=$_POST['email'];
    $pass= $_POST['pass'];
    $route=$_POST['route'];
    $vehicle=$_POST['vehicle'];
	
	

	require("connect_db.php");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
    $checkemail=mysqli_query($mysqli,"SELECT * FROM login WHERE email='$mail'");
    $check_mail2=mysqli_query($mysqli,"SELECT * FROM operario");
	$check_mail=mysqli_num_rows($checkemail);
			if($check_mail>0){
				echo ' <script language="javascript">alert("Atencion, ya existe el mail designado para un usuario, verifique sus datos");</script> ';
            }
            else{
				
                require("connect_db.php");
                $checkemail=mysqli_query($mysqli,"SELECT * FROM login WHERE email='$mail'");
                $check_mail2=mysqli_query($mysqli,"SELECT * FROM operario");
                $insertarlogin=mysqli_query($mysqli,"INSERT INTO `operario` (`id`, `name`, `lastname`, `identificacion`, `rol`, `route`, `vehicle`, `telephone`, `address`) VALUES(NULL,'$name','$lastname','$identificacion','2','$route','$vehicle','$telephone','$address')"); 
                if($insertarlogin==true){
                    require("connect_db.php");
                    $insertarcliente=mysqli_query($mysqli,"INSERT INTO login (`id`, `name`,`email`, `password`, `rol`, `state`) VALUES(NULL,'$name','$mail','$pass','2','1')");
                    echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
                    echo "<script>location.href='../php/admin.php#operario'</script>";
	//rol is 1 for administrator, 0 for clients, 2 for operators, state 0 for down y 1 for active			
                                        }
                else{echo 'ahi esta el lio';}
        }
?>