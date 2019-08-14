<?php
require_once('../../model/database.php');
require_once('../../config/config.php');
class jobs
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
	

	public function ListarProfesiones()
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
}