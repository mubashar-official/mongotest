	<?php include_once("template/header.php"); 
	require_once '../assets/database/vendor/autoload.php';

	?>

<div class="col-md-9 mx-auto">
	<!--- row end   and user row start--->
							<div class="row">
							
									<div class="col-md-12">
									
							<div class="panel panel-default">
								<div class="panel-heading">
									<h1 style=" margin-left:20%; color:blue"> <b>Instructores Detials</b></h1> 
									
								</div>
								<div class="panel-body">
									<table class="table table-hover">
									
										<tr class="btn-success">
											<th>S/N</th>
											<th>CNIC</th>
											<th>First Name</th>
											<th>Last Name</th>
											<th>DOB</th>
											<th></th>
											<th>City</th>
											<th>Sex</th>
											<th>Email</th>
											<th>Phone NO</th>
											<th>UPDATE</th>
											<th>DELETE</th>
										</tr>
										
<?php
					$client  = new MongoDB\Client;
            		$db = $client->userMange;
					$collection = $db->instructors;
					$document = $collection->findOne([]);
					$row = (array)$document;

					
								$i=1;
									
								$cnic=$row['cnic'];
									$fname=$row['fname'];
									$lname=$row['lname'];
									$dob=$row['dob'];
									$address=$row['address'];
									$city=$row['city'];
									$sex=$row['sex'];
									$email=$row['email'];
									$phone=$row['phone'];
									$_id=$row['_id'];

										if($email){
												echo"
														<tr class='success'>
														<td>$i</td>
														<td>$cnic</td>
															<td>$fname</td>
															<td>$lname</td>
															<td>$dob</td>
															<td></td>
															<td>$city</td>
															<td>$sex</td>
															<td>$email</td>
															<td>$phone</td>
															<td> <a href='user_update.php?dal=$cnic' class='btn btn-primary'> UPDATE</a></td>
															<td> <a href='template/tech_delete.php?dal=$cnic' class='btn btn-danger'>DELETE </a></td>
															
															
															
														</tr>	
														";	
												
													$i=$i+1;
												}				
										
								
									

							?>	


									</table>
									
								</div>
							</div>	

		</div>
					
			</div>	
		
</div>
<?php include_once("template/footer.php"); ?>
