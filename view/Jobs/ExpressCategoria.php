<!DOCTYPE html>
<html>
<head>
<?php
include '../Components/Header.php';

if (@!$_SESSION['Usuario']) {
   //header("Location:?c=Usuario&a=Index");
    //Para cuando el perfil sea visitado por alguien mas
    //header("Location:Perfil2.php");
}
?>

</head>
<main>

<div class="Container">
	  <nav class="panel grey darken-4">

    <?php include '../Components/Menu_Standar.php'; ?>

  </nav>
	<div class="row">
		<center>
			<div class="col s3"></div>
	
	  </center>




  </div>
  <div class="row" id="Secciones">
    <center>
    <div class="col s12">
      <div>
    <h1 class="grey-text text-darken-2">Express Jobs</h1>
      </div>
    </div>
    </center>
    <?php
    require ("../../manager/employe/jobs.php");
    $jobs_model;
		
                    
    $jobs_model = new jobs();?>


    <?php foreach($jobs_model->ExpressCategoria($_REQUEST['Profesion']) as $r): ?>
  
    <div class="col s12 m4">
      <div class="card">
      
        <div class="card-image">
          <img src="<?php echo SERVERURL.$r->FotoRuta; ?>" height="300" class="Operaciones">
        </div>
        <div class="card-content">
        
        <ul class="collection">
    <input type="hidden" name="Id_Oferta" value="<?php echo $r->Nombres; ?>"/>
    <li class="collection-item avatar">
      <i class="material-icons circle red">work</i>
      <span class="title">PROFESION U OFICIO</span>
      <p><?php echo $r->Profesion; ?></p>
      <a href="#!" class="secondary-content"><i class="material-icons">done_all</i></a>
    </li>

    <li class="collection-item avatar">
      <i class="material-icons circle green">location_on</i>
      <span class="title">DOMICILIO</span>
      <p><?php echo $r->Domicilio; ?></p>
      <a href="#!" class="secondary-content"><i class="material-icons">done_all</i></a>
    </li>

    <li class="collection-item avatar">
      <i class="material-icons circle orange">email</i>
      <span class="title">EMAIL</span>
      <p><?php echo $r->Email; ?></p>
      <a href="#!" class="secondary-content"><i class="material-icons">done_all</i></a>
    </li>
    
    <li class="collection-item avatar">
      <i class="material-icons circle red">contact_mail</i>
      <span class="title">CONTACTO:</span>
      <p><?php echo $r->Telefono; ?></p>
      <a href="#!" class="secondary-content"><i class="material-icons">done_all</i></a>
    </li>
    <li class="collection-item avatar">
      <i class="material-icons circle blue">rate_review</i>
      <span class="title">DESCRIPCION:</span>
      <p><?php echo $r->Descripcion; ?></p>
      <a href="#!" class="secondary-content"><i class="material-icons">done_all</i></a>
    </li>
    
  </ul>

      <div id="resultado" name="resultado"></div>
      
          
        </div>
        <div class="panel blue darken-3">
        <div class="card-action">
          <center>
          <a href=""  class="white-text text-darken-2"><?php echo $r->Nombres." ".$r->Apellidos; ?></a>
          </center>
          </div>
        </div>
      </div>
    </div>
  
    <?php endforeach; ?> 
    

 
     
     
  </div>
  <?php include '../Components/Footer.php';?>      
  </body>
</html>
        