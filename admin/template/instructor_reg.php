<?php
 require '../../assets/database/vendor/autoload.php';
class Instructor
			{
				private $cnic ;
				private $fname ;
				private $lname ;
				private $dob ;
				private $address ;
				private $city ;
				private $email ;
				private $phone ;
				private $sex ;


				public function userSave($cnic, $fname , $lname , $dob , $address , $city ,  $email , $phone ,$sex)
				{
					$client  = new MongoDB\Client;
            		$userMange = $client->userMange;
					$collection = $userMange->instructors; 

					$this->$cnic = $cnic ;
					$this->$fname =$fname;
					$this->$lname = $lname;
					$this->$dob = $dob;
					$this->$address = $address;
					$this->$city = $city;
					$this->$email = $email;
					$this->$phone = $phone;
					$this->$sex = $sex;
					$resutlt = $collection->insertOne([
														"cnic" =>  $cnic,
														"fname" => $fname,
														"lname" => $lname,
														"dob" => $dob,
														"address" => $address,
														"city" => $city,
														"email" => $email,
														"phone" => $phone,
														"sex" => $sex
													
															]);
					$SaveResult = (array)$resutlt;
					if($SaveResult)
					{
							return true;
					}
					else
					{
							return false;
					}
				}

				
				
				public function userUpdate($cnic, $fname , $lname , $dob , $address , $city ,  $email , $phone ,$sex)
				{
					$client  = new MongoDB\Client;
            		$userMange = $client->userMange;
					$collection = $userMange->instructors; 

					$this->$cnic = $cnic ;
					$this->$fname =$fname;
					$this->$lname = $lname;
					$this->$dob = $dob;
					$this->$address = $address;
					$this->$city = $city;
					$this->$email = $email;
					$this->$phone = $phone;
					$this->$sex = $sex;
					$resutlt = $collection->update(["cnic"=>$cnic],["$set"=>[
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
					$client  = new MongoDB\Client;
            		$db = $client->userMange;
					$collection = $db->instructors;
					$document = $collection->findOne([]);
					$userArray = (array)$document;

					
				}				

				
			}	

			
if(isset($_POST['submit']))
{
		 $cnic =$_POST['cnic'];
		 $fname =$_POST['fname'];
		 $lname =$_POST['lname'];
		 $dob =$_POST['dob'];
		 $address =$_POST['address'];
		 $city =$_POST['city'];
		 $email =$_POST['email'];
		 $phone =$_POST['phone'];
		 $sex =$_POST['sex'];
		 $Instructor= new Instructor();
		$rust= $Instructor->userSave($cnic, $fname , $lname , $dob , $address , $city ,  $email , $phone ,$sex);
	
			if($rust)
			{
				echo "
					<script>
					 alert('your record upDATed successfully');
					 window.open('../user_detail.php','_self');
					</script>
					";
			}

			else
			{
				echo"
					<script>
					alert('uSR nOTE UPDATE');
					window.open('../user_detail.php','_self');
					</script>
				";

			}
			
}


?>