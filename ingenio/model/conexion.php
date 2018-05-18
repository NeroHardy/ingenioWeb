<?php

class Conexion
{
	
	public function conectar()
	{
	try 
		{
    		$conn = new PDO("mysql:host=$servername;dbname=prueba", "root", "");
    		// set the PDO error mode to exception
    		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    		echo "Conexion exitosa";
 		}
	catch(PDOException $e)
    	{
    		echo "Conexion fallida: " . $e->getMessage();
 		}
	}
}

?>