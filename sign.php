<?php
if(isset($_POST['submit']))
{			$user_type= "admin";
			$user_id= $_POST['user_id'];
			$password=$_POST['password'];
			if($user_type=='admin')
			{
				
				include_once('assets/database/db.php');  
				$query="SELECT *FROM `user` where  username='$user_id' and account_type= '$user_type'";
				$run=mysqli_query($conn,$query);
				mysqli_close($conn);
				if($run)
				{


					foreach($run as $row)
					{
						
					
						if($row['username']==$user_id&&$row['password']==$password&&$row['account_type']==$user_type)
								{
									
									If($row['status']==1)
									{	
								
										session_start();
										 $_SESSION["admin"]=$row['username'];
			                    		echo "<script>
				                    		window.open('admin/dashboard.php' , '_self');
											</script>";
									}
									else
									{	
			                    		echo"<script> 
										alert(' User is not activated....'); 
										window.open('index.html' , '_self');
										</script>";
									}
								}	
							else
							{
								echo "<script> 
									alert(' User name and password is incorrect....'); 
									window.open('index.html' , '_self');
									</script>";
								
							}
						

					} // foreach loops end....
					
				}
				else
				{	
			      	echo "<script> 
					alert('user is not Register....'); 
					window.open('index.html' , '_self');
					</script>";
				}		
			}
			else
			{
				echo "<script> 
					alert(' Please select User Type....'); 
					window.open('index.html' , '_self');
					</script>";
			}

}

else
{
	echo "<script> 
					window.open('index.html' , '_self');
					</script>";

}




?>