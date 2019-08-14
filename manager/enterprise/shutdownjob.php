<?php
include ("../../config/config.php");
include ("../../model/database.php");
try
{
	$pdo;  
	
		
	$pdo = Database::Conectar();   
	$Id_Oferta=$_REQUEST['Id_Oferta'];
	$result = array();
	$Estado=0;
	$stm = $pdo->prepare("UPDATE ofertas set Estado='$Estado' where Id_Oferta='$Id_Oferta'");
	$stm->execute();

	//return $stm->fetchAll(PDO::FETCH_OBJ);
	echo "<script>
		alert('La plaza, fue desactivada correctamente.');
		window.location= 'http://localhost/Proyecto/view/Empresas/index.php'
		</script>"; 
	}

catch(Exception $e)
{
	echo "<script>
	alert('Error al desactivar plaza, intente de nuevo. Model');
	window.location= 'http://localhost/Proyecto/view/Empresas/index.php'
	</script>"; 
	die($e->getMessage());
}
	
	
	
?>