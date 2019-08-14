<?php
include ("../../config/config.php");
include ("../../model/database.php");
		try 
		{
            $pdo;  
	
		
            $pdo = Database::Conectar();   
            $Nombre=$_REQUEST['Nombre'];
            $Domicilio=$_REQUEST['Domicilio'];
            $Profesion=$_REQUEST['Profesion'];
            $Estudios=$_REQUEST['Estudios'];            
            $Descripcion=$_REQUEST['Descripcion'];
            if(is_uploaded_file($_FILES['files']['tmp_name'])) { 
                 
                 
                // creamos las variables para subir a la db
                  $ruta = "../../upload/photos/"; 
                  $ruta2 = "upload/photos/"; 
                  $nombrefinal= trim ($_FILES['files']['name']); //Eliminamos los espacios en blanco
                  //$nombrefinal= ereg_replace (" ", "", $nombrefinal);//Sustituye una expresión regular
                  $upload= $ruta . $nombrefinal; 
                  $upload2= $ruta2 . $nombrefinal;  
          
          
          
                  if(move_uploaded_file($_FILES['files']['tmp_name'], $upload)) { //movemos el archivo a su ubicacion 
                              
                              /*echo "<b>Upload exitoso!. Datos:</b><br>";  
                              echo "Nombre: <i><a href=\"".$ruta . $nombrefinal."\">".$_FILES['files']['name']."</a></i><br>";  
                              echo "Tipo MIME: <i>".$_FILES['files']['type']."</i><br>";  
                              echo "Peso: <i>".$_FILES['files']['size']." bytes</i><br>";  
                              echo "<br><hr><br>";  
                                   */
          
          
                             
          
          
                          
          //////////////////////////////////////////////////////
          $result = array();
          session_start();
          $Id = $_SESSION['Id_Usuario'];
          $stm = $pdo->prepare("INSERT INTO ficha (Id_Usuario,Nombre,Domicilio,Profesion,Estudios,Descripcion,FotoRuta) 
          VALUES ('$Id','$Nombre','$Domicilio','$Profesion','$Estudios','$Descripcion','".$upload2."')");
          $stm->execute();
          echo "<script>
			    alert('Datos actualizados correctamente.');
			    window.location= 'http://localhost/Proyecto/view/User/Profile.php'
			    </script>";            
          //return $stm->fetchAll(PDO::FETCH_OBJ);
          }          
      }
  
        }
		catch (Exception $e) 
		{
			die($e->getMessage());
        }
    
	
	
	
?>