<!DOCTYPE html>
<html>
<head>
<?php include 'view/Components/Header.php';?>
</head>
<body>

<div class="Container">
	  <nav class="panel blue accent-3">
    <div class="nav-wrapper">

      <!--<a href="#!" class="brand-logo"><img src="assets/img/Cover.png" class="Logo"></a>-->
      <a href="#!" class="brand-logo"><img class="Logo" src="assets/img/Recursos/logonuevo1.png"/></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="<?php echo SERVERURL;?>view/Usuario/Login.php"><i class="material-icons">lock_open</i></a></li>
        <li><a href="<?php echo SERVERURL;?>view/User/Registro.php"><i class="material-icons">business_center</i></a></li>
        <li><a href="<?php echo SERVERURL;?>view/User/RegistroUser.php"><i class="material-icons">person_add</i></a></li>
      </ul>
    </div>
  </nav>
</div>	
<div class="Container">
  <div class="slider">
    <ul class="slides">
      <li>
        <img src="assets/img/Recursos/Banner1.jpg"> <!-- random image -->
        <div class="caption left-align">
          <h3>¿Buscas empleo?</h3>
          <h5 class="light grey-text text-lighten-3">Crea tu perfil y sube tu curriculum!</h5>
        </div>
      </li>
      <li>
        <img src="assets/img/Recursos/Banner3.jpg"> <!-- random image -->
        <div class="caption left-align">
          <h3 class="">¿Necesitas personal capacitado para tu empresa?</h3>
          <h5 class="light grey-text text-lighten-3">Publica ofertas de trabajo.</h5>
        </div>
      </li>
      <li>
        <img src="assets/img/Recursos/Banner4.jpg"> <!-- random image -->
        <div class="caption right-align">
          <h3>Buscas empleo?</h3>
          <h5 class="light grey-text text-lighten-3">Publica tu curriculum y aplica a puestos disponibles.</h5>
        </div>
      </li>
      <li>
        <img src="assets/img/Recursos/Banner5.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3>Oursouncing</h3>
          <h5 class="light grey-text text-lighten-3">Professional Services</h5>
        </div>
      </li>
    </ul>
  </div>

  <div class="row">
      <div class="grid-example col s12">
      <span class="flow-text"><center><H2>Oursouncing Professional Services</center></H2></span>
      
      </div>
      <div class="grid-example col s12 m6">
      <span class="flow-text" text-align = "justify">Somos una empresa Outsouncing Profesional servicie, virtualizada que promovemos a los profesionales con el objetivo de generar más empleos y
      que las empresas interesadas en sus servicios puedan contactarlos, así buscamos contribuir con el desarrollo científico, económico y social de El salvador y 
      otros países. Enfocado en satisfacer las necesidades de las empresas, con profesionales y técnicos de alto conocimiento
      </span>
      </div>
      <div class="grid-example col s12 m6">
      <img class="materialboxed" width="650" src="assets/img/Recursos/logonuevo2.png">

      </div>

    </div>
    

</div>






  
        

<script>
    $(document).ready(function(){
    $('.slider').slider();
    $('dropdown').dropdown();
  });
    /*    
	$(document.ready(function(){
    $('.slider').slider();
		$('select').material_select();
    $('dropdown').dropdown();
		//$('.datepicker').pickadate();
  });*/
</script>
 <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
 <script type="text/javascript" src="assets/materialize/js/materialize.min.js"></script>
</body>
<footer>
<?php include 'view/Components/Footer.php';?>
</footer>
</html>
