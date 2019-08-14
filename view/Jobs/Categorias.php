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
    <!--<div class="nav-wrapper">

      <a href="#!" class="brand-logo"><img src="assets/img/Cover.png" class="Logo"></a>
      <ul class="right hide-on-med-and-down">
        <li><b><span><?php echo $_SESSION['user'];?></span></b></li>
        <li><a href="?c=Curriculum&a=Upload"><i class="material-icons">cloud_upload</i></a></li>
        <li><a href="?c=Curriculum&a=Ficha"><i class="material-icons">description</i></a></li>
        <li><a href="#"><i class="material-icons">more_vert</i></a></li>
      </ul>
    </div>-->
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

    <?php foreach($jobs_model->ListarCategorias() as $cat): ?>

    <div class="col s4 m6">
      <div class="card">
      
        <!--<div class="card-image">
          <img src="assets/img/Finanzas.jpg" class="Operaciones">
          <span class="card-title"><b class="panel orange darken-3"></b></span>
        </div>-->
        
        <ul class="collection">
        <form method="POST" action="<?php echo SERVERURL;?>view/Jobs/ExpressCategoria.php">
    <input type="hidden" name="Profesion" id="Profesion" value="<?php echo $cat->Profesion; ?>"/>
   
    <li class="collection-item avatar" id="Categorias">
      <i class="material-icons circle blue-grey darken-4">linear_scale</i>
      <span class="title"><b>Profesion:</b></span>
      <p></b><?php echo $cat->Profesion; ?></p>
      <input type="submit"  name ="Aceptar" value="Buscar" class="btn waves-effect waves-light blue darken-2">
      <a href="" name="Aceptar" class="secondary-content"><i class="material-icons" id="CategoriaIcons">done_all</i></a>
      <!--<input type="submit" name="Aceptar" value="VER PERFIL" class="btn waves-effect waves-light green darken-2" href="?c=Plazas&a=ViewProfileAPI">-->
    </li>
    </form>
  </ul>      
          
    
      </div>
    </div>
  
    <?php endforeach; ?> 
    

   
     
     
     
  </div>
  <?php include '../Components/Footer.php';?>      
  </body>
</html>
        