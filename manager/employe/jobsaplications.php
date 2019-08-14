<?php
include ("../../config/config.php");
include ("../../model/database.php");
		try 
		{
            $pdo;  
	
		
           
            $pdo = Database::Conectar();   
            $result = array();
            session_start();
            $Id_Usuario=$_SESSION['Id_Usuario'];
            $Id_Plaza=$_REQUEST['Id_Oferta'];

			$stm = $pdo->prepare("SELECT * from aplicaciones where Id_Usuario='$Id_Usuario' and Id_Oferta='$Id_Plaza'");
			$stm->execute();

			$Resultado= $stm->fetchAll(PDO::FETCH_OBJ);
			
			if($stm->rowCount() > 0)
          {
						#echo '<script language="javascript">alert("Usted ya aplico a esta plza.");</script>';
						echo "<script>
						alert('Aplicacion ya aplico a esta plaza.');
						window.location= 'http://localhost/Proyecto/view/Usuario/index.php'
						</script>";
					  
					}
					else if($stm->rowCount() == 0) {
						$stm = $pdo->prepare("INSERT INTO aplicaciones (Id_Usuario, Id_Oferta) values ('$Id_Usuario','$Id_Plaza')");
			$stm->execute();
						#echo '<script language="javascript">alert("Aplicacion realizada con exito.");</script>'; 
						echo "<script>
						alert('Aplicacion realizada con exito.');
						window.location= 'http://localhost/Proyecto/view/Usuario/index.php'
						</script>";
		
					}
					#session_start();
                    #header("Location:  http://localhost/Proyecto/view/Usuario/index.php",TRUE,301);
					
            
		
	}
		catch (Exception $e) 
		{
			die($e->getMessage());
        }
    
	
	
	
?>