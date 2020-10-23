<?php
 require '../../vendor/autoload.php';
if(isset($_GET['dal']))
{
$d_id= $_GET['dal'];	
		$client  = new MongoDB\Client;
		$userMange = $client->userMange;
		$collection = $userMange->instructors; 
		$run1 = $collection->deleteOne(["cnic"=>$d_id]);

	if($run1)
	{
		echo "<script>
			window.open('../dashboard.php','_self');
			</script>";

	}
	else
	{
		echo "<script>
		 		alert('this User Name already register please try new User Name....');
		 		windows.open('../dashboard.php','_self');
		   </script>";
	}
 }

else
{
	
 echo "<script> 
				
				window.open('../dashboard.php' , '_self');
	  </script>";
}


?>