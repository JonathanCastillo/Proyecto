<div class="navbar-fixed">
    <nav>
<div class="nav-wrapper blue accent-3">

       <!--<a href="#!" class="brand-logo"><img src="assets/img/Cover.png" class="Logo"></a>-->
       <a href="#!" class="brand-logo"><img class="Logo" src="<?php echo SERVERURL;?>assets/img/Recursos/logonuevo1.png"/></a>
      <ul class="right hide-on-med-and-down">

 <!--<a href="#!" class="text-logo"><b>OUTSOURCING<b></a><ul class="right hide-on-med-and-down">-->
        <li><b><span class="white-text"><?php echo $_SESSION['user'];?></span></b></li>
        <li><a href="<?php echo SERVERURL;?>view/Usuario/index.php"><i class="material-icons" id="Menu">arrow_back</i></a></li>
        <li><a href="<?php echo SERVERURL;?>view/Jobs/Categorias.php"><i class="material-icons">local_activity</i></a></li>
        <li><a href="<?php echo SERVERURL;?>view/Curriculum/Subir.php"><i class="material-icons">cloud_upload</i></a></li>
        <li><a href="<?php echo SERVERURL;?>view/Curriculum/Ficha.php"><i class="material-icons">description</i></a></li>
        <li><a href="<?php echo SERVERURL;?>view/User/Profile.php"><i class="material-icons">account_circle</i></a></li>
        <li><a onclick="preguntar()" href="<?php echo SERVERURL;?>manager/users/logout.php" ><i class="material-icons">notifications_paused</i></a></li>
      </ul>
      </div>
</nav>
</div>