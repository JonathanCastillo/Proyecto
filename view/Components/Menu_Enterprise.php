<script language="javascript">
function preguntar(){
   cerrar=confirm("¿Deseas cerrar la sesion?");
   if (cerrar)
   
 else
  //Y aquí pon cualquier cosa que quieras que salga si le diste al boton de cancelar
    alert('Regresando a estado actual')
    window.location= 'Master.php?c=Usuario&a=StartEnterprise';

}
</script>
<div class="navbar-fixed">
    <nav>
<div class="nav-wrapper blue accent-3">

       <!--<a href="#!" class="brand-logo"><img src="assets/img/Cover.png" class="Logo"></a>-->
       <a href="#!" class="brand-logo"><img class="Logo" src="<?php echo SERVERURL;?>assets/img/Recursos/logonuevo1.png"/></a>
 <ul class="right hide-on-med-and-down">

 <!--<a href="#!" class="text-logo"><b>OUTSOURCING<b></a><ul class="right hide-on-med-and-down">-->
        <li><b><span class="white-text text-darken-1"><?php echo $_SESSION['user'];?></span></b></li>
        
        <li><a href="<?php echo SERVERURL;?>view/Empresas/index.php"><i class="material-icons">arrow_back</i></a></li>
        <li><a href="<?php echo SERVERURL;?>view/Empresas/PublicarOferta.php"><i class="material-icons">record_voice_over</i></a></li>
        <li><a href="#"><i class="material-icons">account_circle</i></a></li>
        <li><a onclick="preguntar()" href="<?php echo SERVERURL;?>manager/users/logout.php" ><i class="material-icons">cancel</i></a></li>
      </ul>
    </div>
</nav>
</div>