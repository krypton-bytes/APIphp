<?php
class conectar extends PDO
{
	private $servidor = "uzb4o9e2oe257glt.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
	private $nombreBd = "a0ltnoh5uvum98lm";
	private $usuarioBd = "iu9x4ckw43td5aah";
	private $contra = "gdkjkuvbuyy79yeg";

		public function __construct()
		{
			try{
				parent::__construct('mysql:host=' . $this->servidor . ';dbname=' . $this->nombreBd . ';charset = utf8',  $this->usuarioBd, $this->contra, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

				} catch(PDOException $e){
				echo ' Ha ocurrido un error:' . $e->getMessage();
				exit;
				}
		} 
}
?>
