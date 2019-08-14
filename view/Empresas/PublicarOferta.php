<!DOCTYPE html>
<html>
<head>
<?php include '../Components/Header.php';?>
</head>
<body>
<div class="Container">
	  <nav class="panel grey lighten-2">
      <?php include '../Components/Menu_Enterprise.php'; ?>
     </nav>
	<div class="row">
		<center>
			<div class="col s3"></div>
		<div class="col s6">
			<h1>Publicar Oferta</h1>
			<form method="POST" action="<?php echo SERVERURL;?>manager/enterprise/upjob.php">
      
      <div class="input-field">
      <i class="material-icons prefix">work</i>
      <input type="text" name="Puesto" id="Puesto" required="Por favor rellene este campo">
      <label for="Puesto">Puesto</label>
      </div>

      <div class="input-field">
      <i class="material-icons prefix">monetization_on</i>
      <input type="number" name="Salario" id="Salario" required="Por favor rellene este campo">
      <label for="Salario">Sueldo</label>
      </div>

      <div class="input-field">
      <i class="material-icons prefix">description</i>
      <textarea id="Requisitos" name="Requisitos" class="materialize-textarea"></textarea>
      <label for="Requisitos">Requisitos</label>
      </div>


<br><br>

        	<input type="submit" value="Aceptar" class="btn waves-effect waves-light blue darken-2">
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
