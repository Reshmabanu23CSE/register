<?php
$username ='root';
$dsn ='mysql:host=localhost;dbname=register';
$password ='Shaki@23!@#$';
try
{
	 $db=new PDO($dsn,$username,$password);
	 $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// echo"connected to the register database";
}
catch(PDOException $ex)
{
	echo"connection failed.$ex->getMessage()";
}?>