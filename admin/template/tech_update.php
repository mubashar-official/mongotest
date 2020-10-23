<?php
if(isset($_POST['submit']))
{
	 include('../../assets/database/db.php');
		 $cnic =$_POST['cnic'];
		 $fname =$_POST['fname'];
		 $lname =$_POST['lname'];
		  $dob =$_POST['dob'];
		 $address =$_POST['address'];
		 $city =$_POST['city'];
		  $email =$_POST['email'];
		 $phone =$_POST['phone'];
		 $sex =$_POST['sex'];
		userUpdate($cnic, $fname , $lname , $dob , $address , $city ,  $email , $phone ,$sex);

					
			
			if($rust)
			{
				echo "
					<script>
					 alert('your record uploaded successfully');
					 window.open('../user_detail.php','_self');
					</script>
					";
			}

			else
			{
				echo"
					<script>
					alert('user is already register with cnic');
					window.open('../user_detail.php','_self');
					</script>
				";

			}
			 
}

function userUpdate($cnic, $fname , $lname , $dob , $address , $city ,  $email , $phone ,$sex)
				{
					$client  = new MongoDB\Client;
            		$userMange = $client->userMange;
					$collection = $userMange->instructors; 
					$resutlt = $collection->updateOne(["cnic"=>$cnic],['$set'=>[
														"cnic" =>  $cnic,
														"fname" => $fname,
														"lname" => $lname,
														"dob" => $dob,
														"address" => $address,
														"city" => $city,
														"email" => $email,
														"phone" => $phone,
														"sex" => $sex
													
															]]);

													
					$SaveResult = (array)$resutlt;
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
