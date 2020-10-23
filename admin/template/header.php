<?php 
error_reporting("E_NOTICE"); 
require_once('user_save.php');
?>
<?php

session_start();

		
		
			if (!isset($_SESSION["admin"]))
			{
			header('location:../index.html');
			}
			
		
	 $dal1= $_SESSION["admin"];		
			
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link href="../assets/bootstrap.3.3.7/css/bootstrap.min.css" rel="stylesheet">
   <link href="../assets/css/themecss.css" rel="stylesheet"> 
  </head>
  <body>

    <nav class="navbar navbar-default " style="background-color: #DCDCDC">
  <div class="container">
      <div class="navbar-header">
         <h2 style="color:#D21111">welcome <?php  echo $dal1; ?> </h2>
      </div>
      <ul class="nav navbar-nav navbar-right">
           <li></li>
         
      </ul>
  </div>
</nav>

<div class="container-fluid">
    <div class="row">
      <div class="col-md-3">
          <ul class=" navbar navbar-default nav" style="height: auto; background-color:#DCDCDC">
            <li><a href="Dashboard.php"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>
                  
                  <li><a href="user_reg.php"> <span class="glyphicon glyphicon-pencil"></span> User Register</a></li>
                   <li><a href="user_detail.php"> <span class="glyphicon glyphicon-pencil"></span>  User Mange</a></li>
                  <li><a href="../assets/logout.php" class="btn btn-danger" ><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
          </ul>  
      
      </div>  <!-- col-md-3 end navbar   -->
<?php


