<?php
include ("../../config/config.php");
include ("../../model/database.php");
		try 
		{
            $pdo;  
	
		
			$pdo = Database::Conectar();   
			session_start();
			$Id_Empresa=$_SESSION['Id_Empresa'];
			$Puesto=$_REQUEST['Puesto'];
            $Salario=$_REQUEST['Salario'];
            $Requisitos=$_REQUEST['Requisitos'];
			$stm = $pdo->prepare("INSERT INTO ofertas (Id_Empresa,Puesto,Salario,Requisitos) VALUES ('$Id_Empresa','$Puesto','$Salario','$Requisitos')");
			$stm->execute();
			echo "<script>
			alert('Oferta publicada exitosamente.');
			window.location= 'http://localhost/Proyecto/view/Empresas/index.php'
			</script>";
		
        }
		catch (Exception $e) 
		{
			die($e->getMessage());
        }
    
	
	
	
?>