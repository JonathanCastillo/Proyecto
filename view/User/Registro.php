<!DOCTYPE html>
<html>
<head>
<?php include '../Components/Header.php';?>
</head>
<body>
<div class="Container">
	  <nav class="panel blue accent-3">
    <div class="nav-wrapper">

 <!--<a href="#!" class="brand-logo"><img src="assets/img/Cover.png" class="Logo"></a>-->
 <a href="#!" class="brand-logo"><img class="Logo" src="<?php echo SERVERURL;?>assets/img/Recursos/logonuevo1.png"/></a>
 <ul class="right hide-on-med-and-down">

 <!--<a href="#!" class="text-logo"><b>OUTSOURCING<b></a><ul class="right hide-on-med-and-down">-->
        <li><a href="<?php echo SERVERURL;?>index.php"><i class="material-icons">keyboard_arrow_left</i></a></li>
        <li><a href="<?php echo SERVERURL;?>view/Usuario/Login.php"><i class="material-icons">lock_open</i></a></li>
        <li><a href="#"><i class="material-icons">business_center</i></a></li>
        <li><a href="<?php echo SERVERURL;?>view/User/RegistroUser.php"><i class="material-icons">person_add</i></a></li>
        
      </ul>
    </div>
  </nav>
	<div class="row">
		<center>
			<div class="col s3"></div>
		<div class="col s6">
			<h1>Registrar empresa</h1>
			<form method="POST" action="../../manager/enterprise/register.php">
      <div class="input-field">
      <i class="material-icons prefix">wb_auto</i>
      <input type="text" name="Nombre" id="Nombre" required="Por favor rellene este campo">
      <label for="Email">Nombre de la empresa</label>
      </div>

 
  <label>Rubro</label>

  <select class="browser-default" name="Rubro">
    <option value="" disabled selected>Seleccione un rubro</option>
    <option value="Restaurante">Restaurante</option>
    <option value="Hotel">Hotel</option>
    <option value="Textil">Textil</option>
    <option value="Transporte">Transporte</option>
    <option value="Educacion">Educacion</option>
    <option value="Leyes">Leyes</option>
    <option value="Salud">Salud</option>
    <option value="Seguridad">Seguridad</option>
    <option value="Otro">Otro</option>


    

  </select>


      <div class="input-field">
      <i class="material-icons prefix">email</i>
      <input type="text" name="Email" id="Email" required="Por favor rellene este campo">
      <label for="Email">Email</label>
      </div>

      <div class="input-field">
      <i class="material-icons prefix">lock_open</i>
      <input type="Password" name="Password" id="Password" required="Por favor rellene este campo">
      <label for="Password"></label>
      </div>

      <div class="row">
        <div class="input-field col s12">
        <i class="material-icons prefix">speaker_notes</i>
        
          <textarea id="Descripcion" name="Descripcion" class="materialize-textarea" required></textarea>
          <label for="textarea1">Descipcion de la empresa</label>
        </div>
      </div>

        	<input type="submit" name ="Aceptar" value="Aceptar" class="btn waves-effect waves-light blue darken-2">
        	<!--<input  class="btn waves-effect waves-light" type="submit" name="action">Guardar
    		-->
    		
  			</input>
			</form>
		</div>
    </div>
    </div>
	</center>






  
        

<script>
	$(document.ready(function)
	{
		$('select').material_select();
    $('dropdown').dropdown();
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
