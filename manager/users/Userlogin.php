<?php
include ("../../config/config.php");
include ("../../model/database.php");
		try 
		{
            $pdo;  
	
		
            $pdo = Database::Conectar();   
            $Email=$_REQUEST['Email'];
            $Password=$_REQUEST['Password'];  
		
			$login = $pdo->prepare("SELECT * FROM usuarios WHERE Email= :Email AND Password = :Password"); 
            $login->bindParam(':Email',$Email); 
            $login->bindParam(':Password',$Password); 
            $login->execute();
            $Resultado=$login->fetch(PDO::FETCH_ASSOC);
           //if(count($Resultado) > 0)
            if($login->rowCount() > 0)
          {
            if($Resultado['Tipo']=="Estandar"){
						session_start();
            $_SESSION['Id_Usuario'] = $Resultado['Id_Usuario'];
            $_SESSION['user'] = $Resultado['Nombres']." ".$Resultado['Apellidos'];
                //$_SESSION['Foto_Perfil'] = $Resultado['Foto_Perfil'];
	
				
				header("Location:  http://localhost/Proyecto/view/Usuario/index.php",TRUE,301);
				echo '<script>alert("Bienvenido, al area de empleados.")</script> ';
				#header("location:Master.php?c=Usuario&a=Login");
						}
						
							/*session_start();
							$_SESSION['Id_Usuario'] = $Resultado['Id_Usuario'];
							$_SESSION['user'] = $Resultado['Nombres']." ".$Resultado['Apellidos'];
									//$_SESSION['Foto_Perfil'] = $Resultado['Foto_Perfil'];
							$_SESSION['SesionStatus']=1;
							$consulta=new UsuarioController();
							$consulta->InicioEmpleado();
							echo '<script>alert("Bienvenido, administrador")</script> ';*/
						
######################################################################################################################
			}
			if($login->rowCount()< 1)
			{
			$login2 = $pdo->prepare("SELECT * FROM empresas WHERE Email= :Email AND Password = :Password"); 
            $login2->bindParam(':Email',$Email); 
            $login2->bindParam(':Password',$Password); 
            $login2->execute();
            $Resultado2=$login2->fetch(PDO::FETCH_ASSOC);
           //if(count($Resultado) > 0)
			if($login2->rowCount() > 0)
			{
				session_start();
				$_SESSION['Id_Empresa'] = $Resultado2['Id_Empresa'];
				$_SESSION['user'] = $Resultado2['Nombre'];
											//$_SESSION['Foto_Perfil'] = $Resultado['Foto_Perfil'];
				echo "<script>
				alert('Bienvenido al area de empresas.');
				window.location= 'http://localhost/Proyecto/view/Empresas/index.php'
				</script>";
				#header("Location:  http://localhost/Elchunche/view/Usuario/index.php",TRUE,301);
				#echo '<script>alert("Bienvenido, al area de administracion.")</script> ';
			}
			else
			{
				echo "<script>
			alert('Datos incorrectos, intente nuevamente.');
			window.location= 'http://localhost/Proyecto/view/Usuario/Login.php'
			</script>";
		
			   return false;
			}

			}
            
		
	}
		catch (Exception $e) 
		{
			die($e->getMessage());
        }
    
	
	
	
?>