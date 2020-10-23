<?php  
include "database/db.php";
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
					return $userArray = (array)$document;
					
				}				

				
			}	
			
	

/*

		
		function program()
		{
		require_once('../assets/database/db.php');
							$query="SELECT * FROM program";
							$run=mysqli_query($conn,$query);
							mysqli_close($conn);
							if($run)
							{
								foreach($run as $row)
								{	
										$pro_id=$row['pro_id'];
										$pro_title=$row['pro_title'];
										echo"<option value='$pro_id'>$pro_title</option>";

								}
							}			

		}

		function all_course()
		
		{
			include('../assets/database/db.php');
							$query="SELECT * FROM course";
							$run=mysqli_query($conn,$query);
							if($run)
							{
								
								foreach($run as $row)
								{	
										$co_id=$row['co_id'];	
										$co_title=$row['co_title'];
											
									echo '<option value="'; echo $co_id; echo '">'; echo $co_id; echo "|<br>|"; echo $co_title; echo '</option>';
									
								}
							}		


		}	
		
	function all_std()
		
		{
			include('../assets/database/db.php');
							$query="SELECT * FROM std";
							$run=mysqli_query($conn,$query);
							if($run)
							{
								
								foreach($run as $row)
								{	
										$std_reg=$row['std_reg'];	
										$name=$row['name'];
											
									echo '<option value="'; echo $std_reg; echo '">'; echo $std_reg; echo "|<br>|"; echo $name; echo '</option>';
									
								}
							}		


		}		
		
/*

		function program($pro_id)
		{
			include('../assets/database/db.php');
							$query="SELECT * FROM `program` WHERE `pro_id`='$pro_id'";
							$run=mysqli_query($conn,$query);
							if($run)
							{
								$i=1;
								foreach($run as $row)
								{	

									return $program_title=$row['pro_title'];
									
								}
							}		


		}

		
		function course($co_id)
		{
			include('../assets/database/db.php');
							$query="SELECT * FROM `course`  WHERE `co_id`='$co_id'";
							$run=mysqli_query($conn,$query);
							if($run)
							{
								$i=1;
								foreach($run as $row)
								{	

									return $row['co_title'];
									
								}
							}		


		}

	/*	function course_credits($co_id)
		{
			include('../assets/database/db.php');
							$query="SELECT * FROM `course`  WHERE `co_id`='$co_id'";
							$run=mysqli_query($conn,$query);
							if($run)
							{
								foreach($run as $row)
								{	

									return $row['credits'];
									
								}
							}		


		}	


	function grade($marks)
			{
				if ($marks<50) 
				{
						return 'F';	
				}
				 elseif ($marks<=60) 
				 {
				 	return 'D';
				 }
				 elseif ($marks<=67) 
				 {
				 	return 'C';
				 }
				 elseif ($marks<=70) 
				 {
				 	return "B-";
				 }
				 elseif ($marks<=74) 
				 {
				 	return "B";
				 }
				 elseif ($marks<=79) 
				 {
				 		return 'B+';	
				 }

				 elseif ($marks<=84) 
				 {
				 		return "A-";	
				 }

				 elseif ($marks<=89) 
				 {
				 		return 'A';	
				 }

				 elseif ($marks<=100) 
				 {
				 		return 'A+';	
				 }
				else
				{
						return "Wrong";
				}
				
			}	


			function gpa($marks)
			{
				if ($marks<50) 
				{
						return 0.0;	
				}
				 elseif ($marks<=60) 
				 {
				 	return 1.0;
				 }
				 elseif ($marks<=67) 
				 {
				 	return 2.0;
				 }
				 elseif ($marks<=70) 
				 {
				 	return 2.66;
				 }
				 elseif ($marks<=74) 
				 {
				 	return 3.0;
				 }
				 elseif ($marks<=79) 
				 {
				 		return 3.33;	
				 }

				 elseif ($marks<=84) 
				 {
				 		return 3.66;	
				 }

				 elseif ($marks<=89) 
				 {
				 		return 3.96;	
				 }

				 elseif ($marks<=100) 
				 {
				 		return 4;	
				 }
				else
				{
						return 0;
				}
				
			}




function percentage($marks,$total)
			{

					return $percentage=($marks/$total)*100;
			}		

function cgpa($total_gp,$credits)
	{
		return $total_gp/$credits;

	}				

function student_count()
	{
		include('../assets/database/db.php');
							$query="select count(*) as total from std";
							$run=mysqli_query($conn,$query);
							mysqli_close($conn);
						$value=mysqli_fetch_assoc($run);
						return $value['total'];
		

	}


function tech_count()
	{
		include('../assets/database/db.php');
							$query="select count(*) as total from tech";
							$run=mysqli_query($conn,$query);
							mysqli_close($conn);
						$value=mysqli_fetch_assoc($run);
						return $value['total'];
		

	}	

	function user_count()
	{
		include('../assets/database/db.php');
							$query="select count(*) as total from user";
							$run=mysqli_query($conn,$query);
							mysqli_close($conn);
						$value=mysqli_fetch_assoc($run);
						return $value['total'];
		

	}	

	function program_count()
	{
		include('../assets/database/db.php');
							$query="select count(*) as total from program";
							$run=mysqli_query($conn,$query);
							mysqli_close($conn);
						$value=mysqli_fetch_assoc($run);
						return $value['total'];
		

	}	


		function course_count()
	{
		include('../assets/database/db.php');
							$query="select count(*) as total from course";
							$run=mysqli_query($conn,$query);
							mysqli_close($conn);
						$value=mysqli_fetch_assoc($run);
						return $value['total'];
		

	}	

		*/
?>		