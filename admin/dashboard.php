<?php  include_once('template/header.php');  ?>

<div class="col-md-9">	
						
							<div class="row">
								<div class="col-md-8">
							<div class="panel panel-default">
								<div class="panel-heading">
									<?php include_once("template/user_add.php"); ?>
								</div>
								<div class="panel-body">
									<table class="table table-hover">
									
										<tr class="text-primary">
											<th>S/N</th>
											<th>NAME</th>
											<th>USER NAME</th>
											<th>USER TYPE</th>
											
											<th>ACTIVE/DEACTIVE</th>
											<th>Delete</th>
											
										</tr>
										

							<!-- used for php -->

<?php

						

							$query="SELECT * FROM `user`";
							$run=mysqli_query($conn,$query);
							mysqli_close($conn);
							if($run)
							{
								$i=0;
								foreach($run as $row)
								{	
										$name=$row['name'];
										$user_name=$row['username'];
										$user_status=$row['status'];
										$acount_type=$row['account_type'];			
							
?>							
										<tr>
												<td><?php  ECHO $i=$i+1;  ?></td>
												<td><?php  ECHO  $name;?> </td>	
												<td><?php  ECHO  $user_name;?> </td>												
												<td><?php  ECHO $acount_type; ?> </td>
												<td>
													<?php	active_deactive($user_status,$user_name);  ?>
												</td>
												<td>
												<?php	echo "<a href='template/user_delete.php?dal=$user_name' class='btn btn-danger'>DELETE </a>"; ?>
												</td>
										</tr>
										
									<?php
								}	
							}
										?>	


									</table>
									
								</div>
							</div>	

							</div>
							
							</div>
							
						
							
						
		
		
</div>



<?php include_once('template/footer.php'); ?>	

<?php






?>					

	