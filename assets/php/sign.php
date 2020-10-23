<?php
require '../database/db.php';
class Loged
{
    
	private $user_id;
	private $password;
	private $user_type;

	public function login($user_id, $password,$user_type)
			{
					
					$this->$user_id = $user_id;
					$this->$password = $password;
					$this->$user_type = $user_type;

				$Databases = new Database();
				$db = $Databases->connect();
				$collection = $db->user;
				$document = $collection->findOne(
					['username' => $user_id,
					'password' => $password
					]
				);
				$userArray = (array)$document;
				if($userArray)
				{	
						if($user_type=='admin')
						{
									if($userArray['username']==$user_id&&$userArray['password']==$password&&$userArray['account_type']==$user_type)
											{
												
												If($userArray['status']==1)
												{	
											
													session_start();
													$_SESSION["admin"]=$userArray['username'];
													$_SESSION["password"]=$userArray['password'];
													echo "<script>
														window.open('../../admin/dashboard.php' , '_self');
														</script>";
												}
												else
												{	
													echo"<script> 
													alert(' User is not activated....'); 
													window.open('../../index.html' , '_self');
													</script>";
												}
											}
											else
												{
														echo "<script> 
															alert(' User name and password is incorrect....'); 
															window.open('../../index.html' , '_self');
															</script>";
														
												}	
					
						}
						else
						{
							echo "<script> 
															alert('User type is Wrong...'); 
															window.open('../../index.html' , '_self');
															</script>";

						}

				}

				else
				{
					echo "<script> 
					alert('User Name is Note Present.....'); 
					window.open('../../index.html' , '_self');
					</script>";

				}


				


				
			}

			function logout()
			{
					
				session_destroy();
				echo"<script> 
					alert(' Logout Successfully....'); 
					window.open('../../index.html' , '_self');
					</script>";
			}
}
$test = new Loged();

$test->login("admin","123","admin");


?>