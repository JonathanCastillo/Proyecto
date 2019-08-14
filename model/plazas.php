<?php
require_once('controller/Usuario.controller.php');
require_once('controller/General.controller.php');
class Plazas
{
	private $pdo, $iniciar;

    
    
    
	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::Conectar();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function ListarCategorias()
    {
        try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM profesiones order by Profesion ASC");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}


	}
	public function ExpressCategoria($Profesion)
    {
        try
		{
			$result = array();

			#$stm = $this->pdo->prepare("SELECT * FROM ficha where Profesion='$Profesion'");
			$stm = $this->pdo->prepare("SELECT usuarios.Nombres,usuarios.Email, usuarios.Apellidos, usuarios.Telefono,ficha.FotoRuta, ficha.Domicilio, ficha.Profesion, ficha.Descripcion FROM ficha INNER JOIN usuarios on (ficha.Id_Usuario=usuarios.Id_Usuario) where Profesion='$Profesion' order by ficha.Id_Ficha DESC");

			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}


	}

	public function PublicarPlaza($Puesto,$Salario,$Requisitos)
	{
		try
		{
			session_start();
			$Id_Empresa=$_SESSION['Id_Empresa'];
			$stm = $this->pdo->prepare("INSERT INTO ofertas (Id_Empresa,Puesto,Salario,Requisitos) VALUES ('$Id_Empresa','$Puesto','$Salario','$Requisitos')");
			$stm->execute();
			echo "<script>
			alert('La plaza, fue publicada correctamente.');
			window.location= 'Master.php?c=Usuario&a=StartEnterprise'
			</script>"; 
		}
	
		
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

		public function PlazaDetailsProfiles($Id)
    {
        try
		{
			$result = array();
			$stm = $this->pdo->prepare("SELECT ficha.Domicilio, ficha.Profesion, ficha.Estudios, ficha.Descripcion, ficha.FotoRuta, curriculum.Ruta FROM ficha WHERE Id_Usuario='$Id' ORDER BY Id_Ficha DESC LIMIT 1");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}

		}

		public function PlazaDetails()
    {
        try
		{
			$result = array();
			$Id_Plaza=$_REQUEST['Id_Oferta'];
			$stm = $this->pdo->prepare("SELECT ofertas.Id_Oferta, ofertas.Salario, ofertas.Requisitos, ofertas.Puesto, empresas.Nombre, empresas.Email FROM ofertas INNER JOIN empresas on (ofertas.Id_Empresa=empresas.Id_Empresa) where ofertas.Id_Oferta='$Id_Plaza' order by ofertas.Id_Oferta DESC");
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
	
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
    public function MisPlazas()
    {
        try
		{
			$result = array();
			$Id_Empresa = $_SESSION['Id_Empresa'];
			$stm = $this->pdo->prepare("SELECT ofertas.Id_Oferta, ofertas.Salario, ofertas.Requisitos, ofertas.Puesto, empresas.Nombre, empresas.Email FROM ofertas INNER JOIN empresas on (ofertas.Id_Empresa=empresas.Id_Empresa) where ofertas.Id_Empresa='$Id_Empresa' and Estado='1' order by ofertas.Id_Oferta DESC");
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
	
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}

	}
	public function DetallesDeAplicaciones($Id_Oferta)
	{
			try
	{
		$result = array();
		$stm = $this->pdo->prepare("SELECT aplicaciones.Id_Aplicacion, usuarios.Id_Usuario, usuarios.Nombres, usuarios.Apellidos, curriculum.Ruta, ficha.FotoRuta FROM aplicaciones INNER JOIN usuarios on (aplicaciones.Id_Usuario=usuarios.Id_Usuario) INNER JOIN ficha on (aplicaciones.Id_Usuario=ficha.Id_Usuario) INNER JOIN curriculum on (aplicaciones.Id_Usuario=curriculum.Id_Usuario) where aplicaciones.Id_Oferta='$Id_Oferta' order by aplicaciones.Id_Aplicacion DESC");
		$stm->execute();
		return $stm->fetchAll(PDO::FETCH_OBJ);

	}
	catch(Exception $e)
	{
		die($e->getMessage());
	}
}

	public function Aplicaciones($Id_Oferta)
	{
			try
	{
		//$result = array();
		$stm = $this->pdo->prepare("SELECT aplicaciones.Id_Aplicacion,usuarios.Nombres, usuarios.Apellidos, curriculum.Ruta FROM aplicaciones INNER JOIN usuarios on (aplicaciones.Id_Usuario=usuarios.Id_Usuario) INNER JOIN curriculum on (aplicaciones.Id_Usuario=curriculum.Id_Usuario) where aplicaciones.Id_Oferta='$Id_Oferta' order by aplicaciones.Id_Aplicacion DESC");
		$stm->execute();
		$Cuenta=	$stm->rowCount();
		echo $Cuenta;
		return $stm->fetchAll(PDO::FETCH_OBJ);

	}
	catch(Exception $e)
	{
		die($e->getMessage());
	}

}
		public function ListarPlazas()
    {
        try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT ofertas.Id_Oferta, ofertas.Salario, ofertas.Requisitos, ofertas.Puesto, empresas.Nombre, empresas.Email FROM ofertas INNER JOIN empresas on (ofertas.Id_Empresa=empresas.Id_Empresa) where Estado='1' order by ofertas.Id_Oferta DESC");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}


	}

	public function DesactivarPlaza($Id_Oferta)
	{
		try
		{
			$result = array();
			$Estado=0;
			$stm = $this->pdo->prepare("UPDATE ofertas set Estado='$Estado' where Id_Oferta='$Id_Oferta'");
			$stm->execute();

            //return $stm->fetchAll(PDO::FETCH_OBJ);
            echo "<script>
                alert('La plaza, fue desactivada correctamente.');
                window.location= 'Master.php?c=Usuario&a=StartEnterprise'
                </script>"; 
            }

		catch(Exception $e)
		{
			echo "<script>
			alert('Error al desactivar plaza, intente de nuevo. Model');
			window.location= 'Master.php?c=Usuario&a=StartEnterprise'
			</script>"; 
			die($e->getMessage());
        }

	}	
		public function VerificarAplicacion($Id_Usuario,$Id_Plaza)
    {
        try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * from aplicaciones where Id_Usuario='$Id_Usuario' and Id_Oferta='$Id_Plaza'");
			$stm->execute();

			$Resultado= $stm->fetchAll(PDO::FETCH_OBJ);
			
			if($stm->rowCount() > 0)
          {
						echo '<script language="javascript">alert("Usted ya aplico a esta plza.");</script>';
					
					  
					}
					else if($stm->rowCount() == 0) {
						$stm = $this->pdo->prepare("INSERT INTO aplicaciones (Id_Usuario, Id_Oferta) values ('$Id_Usuario','$Id_Plaza')");
			$stm->execute();
						echo '<script language="javascript">alert("Aplicacion realizada con exito.");</script>'; 
						
					}
					#session_start();
					header("location:Master.php?c=Usuario&a=Inicio");
					
				
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}


    }
}