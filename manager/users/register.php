<?php
include ("../../config/config.php");
include ("../../model/database.php");
		try 
		{
            $pdo;  
	
		
            $pdo = Database::Conectar();   
            $Nombres=$_REQUEST['Nombres'];
            $Apellidos=$_REQUEST['Apellidos'];
            $Telefono=$_REQUEST['Telefono'];
            $Email=$_REQUEST['Email'];
            $Password=$_REQUEST['Password'];
            $FechaNacimiento=$_REQUEST['FechaNacimiento'];
            $Domicilio=$_REQUEST['Domicilio'];
            $stm = $pdo->prepare("INSERT INTO usuarios (Nombres, Apellidos,Telefono, Email, Password, Fecha_Nacimiento,Domicilio) values ('$Nombres','$Apellidos','$Telefono','$Email','$Password','$FechaNacimiento','$Domicilio')");
			$stm->execute();
				//return $stm->fetchAll(PDO::FETCH_OBJ);
		
			echo "<script>
			alert('Registro completado, por favor inicie sesion.');
			window.location= 'http://localhost/Proyecto/view/Usuario/Login.php'
			</script>";
		
        }
		catch (Exception $e) 
		{
			die($e->getMessage());
        }
    
	
	
	
?>