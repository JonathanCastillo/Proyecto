<?php
include ("../../config/config.php");
include ("../../model/database.php");
		try 
		{
            $pdo;  
	
		
            $pdo = Database::Conectar();   
            #$result = array();
			$stm = $pdo->prepare("INSERT INTO empresas (Nombre, Rubro, Email, Password, Descripcion) values ('$Nombre','$Rubro','$Email','$Password','$Descripcion')");
			$stm->execute();
			//return $stm->fetchAll(PDO::FETCH_OBJ);
	
			#$consulta=new UsuarioController();
			#$consulta->Index();
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