<?php
include "../../assets/database/db.php";
class User
			{
				
				private $username ;
				private $name ;
				private $password;
				private $account_type ;
				private $date_created ;
				private $created_by ;
				private $status;
				

				public function userSave($username, $name, $password, $account_type, $date_created, $created_by, $status)
				{
					$Databases = new Database();
   					$db = $Databases->connect();
					$collection = $db->user; 

					$this->$username = $username;
					$this->$name = $name;
					$this->$password = $name;
					$this->$account_type = $account_type;
					$this->$date_created =$date_created;
					$this->$created_by = $created_by ;
					$this->$status = 1;
					$resutlt = $collection->insertOne([
														"username" =>  $username,
														"name" => $name,
														"password" => $password,
														"account_type" => $account_type,
														"date_created" => $date_created,
														"created_by" => $created_by,
														"status" => $status
													
															]);
					$SaveResult= (array)$resutlt;
					print_r($SaveResult);
					if($SaveResult['MongoDB\InsertOneResultisAcknowledged']==1)
					{
							return true;
					}
					else
					{
							return false;
					}
				}

				public function alluser()
				{
					$Databases = new Database();
					$db = $Databases->connect();
					$collection = $db->user;
					$document = $collection->findOne([]);
					$userArray = (array)$document;
					
				}				

				
			}	
			
			
if(isset($_POST['submit']))
{	
		

			
			 $username= $_POST['username'];
			 $name= $_POST['name'];
			 $password= $_POST['password'];
			 $account_type= $_POST['ac_type'];
			 $date_created = (string)date("l jS \of F Y h:i:s A");
			 $created_by ="admin" ;
			 $status = 0;
			 $User = new User();

			//userSave($username, $name, $password, $account_type, $date_created, $created_by, $status);
			if($User->userSave($username, $name, $password, $account_type, $date_created, $created_by, $status))
			{
				echo "
							<script>
							 alert('user  Register successfully');
							 window.open('../dashboard.php','_self');
							</script>
							";
			}
			else
			{
				echo "
							<script>
							 alert('user  Register successfully');
							 window.open('../dashboard.php','_self');
							</script>
							";

			}

}
		// $query="INSERT INTO `user`( `username`, `name`, `password`, `account_type`)
		// 					 VALUES ('$username','$name','$password','$ac_type');";
		// include('../../assets/database/db.php');
		// 	$run= mysqli_query($conn,$query);
		// 	mysqli_close($conn);
			
		// 	if($run)
		// 	{
		// 		echo "
		// 			<script>
		// 			 alert('your record uploaded successfully');
		// 			 window.open('../dashboard.php','_self');
		// 			</script>
		// 			";
		// 	}

		// 	else
		// 	{
		// 		echo"
		// 			<script>
		// 			alert('this id is already register');
		// 			window.open('../dashboard.php','_self');
		// 			</script>
		// 			";

		// 	}
//}
?>