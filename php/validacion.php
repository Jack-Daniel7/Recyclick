<?php
$username=$_POST['mail'];
$pass=$_POST['pass'];
$pass1=md5($pass);
session_start();
require("connect_db.php");

/*$sql2=mysqli_query($mysqli,"SELECT * FROM login,cliente WHERE login.email LIKE '$username' and cliente.email LIKE '$username'");
if($f2=mysqli_fetch_assoc($sql2)){
    if($pass==$f2['password']){
        $_SESSION['id']=$f2['id'];
		$_SESSION['email']=$f2['email'];
		$_SESSION['rol']=$f2['rol'];
        $_SESSION['state']=$f2['state'];
        $_SESSION['user']=$f2['name'];
    }
    if ($_SESSION['state']==1){

        if ($_SESSION['rol']==1){
            echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';
			echo "<script>location.href='admin.php'</script>";
        }
        
        elseif($_SESSION['rol']==0){
            echo"<script>location.href='client.php'</script>";
        }

        elseif($_SESSION['rol']==2){
            echo"<script>location.href='operator.php'</script>";
        }
    }


}
else{*/

    $sql3=mysqli_query($mysqli,"SELECT * FROM login WHERE login.email LIKE '$username' ");
    if($f3=mysqli_fetch_assoc($sql3)){
        if($pass==$f3['password']){
            $_SESSION['id']=$f3['id'];
            $_SESSION['email']=$f3['email'];
            $_SESSION['rol']=$f3['rol'];
            $_SESSION['state']=$f3['state'];
            $_SESSION['user']=$f3['name'];
        }
        if ($_SESSION['state']==1){
    
            if ($_SESSION['rol']==1){
                echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';
                echo "<script>location.href='../php/admin.php'</script>";
            }
            
            elseif($_SESSION['rol']==0){
                echo"<script>location.href='../php/client.php'</script>";
            }
    
            elseif($_SESSION['rol']==2){
                echo"<script>location.href='../php/operator.php'</script>";
            }
        }

        else{
            echo '<script>alert("El Usuario no se encuentra activo")</script>';
            echo "<script>location.href='../index.php'</script>";
        }
    
    
    }
  
    /*  echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';	
	echo "<script>location.href='../index.php'</script>";*/



?>
