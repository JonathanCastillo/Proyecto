<?php
require_once('../../model/database.php');
require_once('../../config/config.php');
class user
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
	public function ViewProfileAPI()
    {
        try
		{
			$result = array();
			
			$Id_Usuario = $_REQUEST['Id_Usuario'];
			$stm = $this->pdo->prepare("SELECT ficha.Domicilio, ficha.Profesion, ficha.Estudios, ficha.Descripcion, ficha.FotoRuta, usuarios.Nombres, usuarios.Apellidos, curriculum.Ruta FROM ficha INNER JOIN usuarios on (ficha.Id_Usuario=usuarios.Id_Usuario) INNER JOIN curriculum on (ficha.Id_Usuario=curriculum.Id_Usuario) WHERE ficha.Id_Usuario='$Id_Usuario' ORDER BY Id_Ficha DESC LIMIT 1");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}

	}
    public function ProfileFicha()
    {
        try
		{
			$result = array();
			
			$Id=$_SESSION['Id_Usuario'];
			$stm = $this->pdo->prepare("SELECT ficha.Domicilio, ficha.Profesion, ficha.Estudios, ficha.Descripcion, ficha.FotoRuta FROM ficha WHERE Id_Usuario='$Id' ORDER BY Id_Ficha DESC LIMIT 1");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}

		}
		public function ProfileCurriculum()
		{
			try
			{
				$result = array();
				
				$Id=$_SESSION['Id_Usuario'];
				$stm = $this->pdo->prepare("SELECT curriculum.Nombre,curriculum.Descripcion, curriculum.Tipo, curriculum.Ruta FROM curriculum WHERE Id_Usuario='$Id' ORDER BY Id_Curriculum DESC LIMIT 1");
				$stm->execute();
	
				return $stm->fetchAll(PDO::FETCH_OBJ);
			}
			catch(Exception $e)
			{
				die($e->getMessage());
			}
	
		}

}