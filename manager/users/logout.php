<?php
try
{
    session_start();
    session_destroy();
    header("Location:  http://localhost/Proyecto/index.php",TRUE,301);
	echo '<script>alert("Cerrando sesion.")</script> ';

}
catch(Exception $e)
{
	die($e->getMessage());
}

?>