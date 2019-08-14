<?php
include ("../../config/config.php");
include ("../../model/database.php");
		try 
		{
            $pdo;  
	
		
            $pdo = Database::Conectar();   
            $Titulo=$_REQUEST['Titulo'];
            $Descripcion=$_REQUEST['Descripcion'];  
		
                    
            if(is_uploaded_file($_FILES['fichero']['tmp_name'])) { 
                 
                 
                // creamos las variables para subir a la db
                  $ruta = "../../upload/"; 
                  $nombrefinal= trim ($_FILES['fichero']['name']); //Eliminamos los espacios en blanco
                  //$nombrefinal= ereg_replace (" ", "", $nombrefinal);//Sustituye una expresión regular
                  session_start();
                  $NuevoNombre=$Titulo."_".$_SESSION['user'].mt_rand(1, 50); ;
                  $upload= $ruta . $nombrefinal;  
                  $publicar = $ruta.$NuevoNombre.".pdf";
          
          if($_FILES['fichero']['type']=="application/pdf"){
                  if(move_uploaded_file($_FILES['fichero']['tmp_name'], $publicar)) { //movemos el archivo a su ubicacion 
                              
                              /*echo "<b>Upload exitoso!. Datos:</b><br>";  
                              echo "Nombre: <i><a href=\"".$ruta . $nombrefinal."\">".$_FILES['fichero']['name']."</a></i><br>";  
                              echo "Tipo MIME: <i>".$_FILES['fichero']['type']."</i><br>";  
                              echo "Peso: <i>".$_FILES['fichero']['size']." bytes</i><br>";  
                              echo "<br><hr><br>";  */
                                   
          
          
          ######################################################################################################################
          #session_start();
          $Id_Usuario=$_SESSION['Id_Usuario'];
          $comprobacion = $pdo->prepare("SELECT * from curriculum where Id_Usuario='$Id_Usuario'");
          $comprobacion->execute();

          //$Resultado= $comprobacion->fetchAll(PDO::FETCH_OBJ);
          
          if($comprobacion->rowCount() > 0)
          {
              $Id_Usuario=$_SESSION['Id_Usuario'];
              $actualizacion = $pdo->prepare("UPDATE curriculum set Id_Usuario='$Id_Usuario', Nombre='$Titulo', Descripcion='$Descripcion',Tipo='".$_FILES['fichero']['type']."',Ruta='$publicar' where Id_Usuario='$Id_Usuario'");
              $actualizacion->execute();
              echo "<script>
              alert('Su curriculum, ha sido actualizado.');
              window.location= 'http://localhost/Proyecto/view/Usuario/index.php'
              </script>";
          }
          elseif ($comprobacion->rowCount() < 1){
          


          #####################################################################################################################
          
          
                             $query = "INSERT INTO archivos (name,description,ruta,tipo,size) 
              VALUES ('$Titulo','$Descripcion','".$Nombrefinal."','".$_FILES['fichero']['type']."','".$_FILES['fichero']['size']."')"; 
          //////////////////////////////////////////////////////
          $result = array();
          
          $Id = $_SESSION['Id_Usuario'];
          $stm = $pdo->prepare("INSERT INTO curriculum (Id_Usuario,Nombre,Descripcion,Tipo,Ruta) 
          VALUES ('$Id','$Titulo','$Description','".$_FILES['fichero']['type']."','".$publicar."')");
          $stm->execute();

          //return $stm->fetchAll(PDO::FETCH_OBJ);
          echo "<script>
              alert('Su curriculum, fue publicado correctamente.');
              window.location= 'http://localhost/Proyecto/view/Usuario/index.php'
              </script>"; 
          }
          
        }
            
		
        }
        }
        }
		catch (Exception $e) 
		{
			die($e->getMessage());
        }
    
	
	
	
?>