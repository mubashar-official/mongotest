<?php 
error_reporting("E_NOTICE"); 
?>
<?php

session_start();

		
		
			if (!isset($_SESSION["admin"]))
			{
			header('location:../index.html');
			}
			
		
	 $dal1= $_SESSION["admin"];		
			
?>