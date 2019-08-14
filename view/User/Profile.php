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
<body>

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
   
      </div>
    </div>
    </center>
    <div class="row">

<div class="col s3">
<?php
    require ("../../manager/users/user.php");
    $model_profile;
		
                    
    $model_profile = new user();?>
<?php foreach($model_profile->ProfileFicha() as $r): ?>
    
      <div class="card">
      <input type="hidden" id="Id_Oferta" name="Id_Oferta">
        <div class="card-image">
          <img src="<?php echo SERVERURL.$r->FotoRuta; ?>" height="400" width="300">
          <!--<span class="card-title panel blue darken-3"></span>-->
        </div>
        <div class="card-content">
         
        </div>
        <div class="panel blue darken-3">
        <div class="card-action">
          <center>
          <a href=""  class="white-text text-darken-2"><H6 class="font-weight-light"><?php echo $_SESSION['user'];?></H6></a>
          </center>
          </div>
        </div>
      </div>
   
     
</div>

<div class="col s9">
<ul class="collection">
    <li class="collection-item avatar">
    <i class="material-icons circle blue">location_on</i>
      <span class="title">Domicilio</span>
      <p><?php echo $r->Domicilio; ?>
      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">hdr_strong</i></a>
    </li>
    <li class="collection-item avatar">
      <i class="material-icons circle orange">check_circle</i>
      <span class="title">Profesión</span>
      <p><?php echo $r->Profesion; ?>
      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">hdr_strong</i></a>
    </li>
    <li class="collection-item avatar">
      <i class="material-icons circle green">insert_chart</i>
      <span class="title">Estudios</span>
      <p><?php echo $r->Estudios; ?>
      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">hdr_strong</i></a>
    </li>
    <li class="collection-item avatar">
      <i class="material-icons circle red">portrait</i>
      <span class="title">Descripcion</span>
      <p><?php echo $r->Descripcion; ?>
      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">hdr_strong</i></a>
    </li>
    <li class="collection-item avatar">
      <i class="material-icons circle green">description</i>
      <span class="title">Curriculum disponible</span>
      <?php foreach($model_profile->ProfileCurriculum() as $s): ?>
      <p>Titulo: <?php echo $s->Nombre; ?><br>
      <p>Descripcion: <?php echo $s->Descripcion; ?><br>
      <p>Tipo: <?php echo $s->Tipo; ?><br>
      <a href="<?php echo $s->Ruta; ?>" target="_blanck">Ver curriculum completo.</a><br>
      <?php endforeach; ?> 
      
      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">hdr_strong</i></a>
    </li>
  </ul>

</div>
<?php endforeach; ?> 
</div>

   
  </div>
        

<script>
	$(document.ready(function)
	{
		$('select').material_select();
		$('.datepicker').pickadate();
	}
	);

</script>
 <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
 <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
<footer>
<?php include '../Components/Footer.php';?>
</footer>
</html>