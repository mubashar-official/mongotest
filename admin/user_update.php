<?php
if(isset($_GET['dal']))
{	
include('../assets/database/db.php');	
  $d_id= $_GET['dal'];	
		$client  = new MongoDB\Client;
		$db = $client->userMange;
		$collection = $db->instructors;
		$document = $collection->findOne(["cnic" => $d_id]);
		$row = (array)$document;
		

				
									$cnic=$row['cnic'];
									$fname=$row['fname'];
									$lname=$row['lname'];
									$dob=$row['dob'];
									$address=$row['address'];
									$city=$row['city'];
									$sex=$row['sex'];
									$email=$row['email'];
									$phone=$row['phone'];
	
}		
?>

<?php  include_once('template/header.php');?>
<div class="col-md-9">
  	<div class="container-fluid">
					<form class="class="panel panel-info form-horizontal" action="template/tech_update.php" Method="POST">
				<div class="panel-body">
				<div class="form-group row">
				<label for="Registration" class="control-label col-md-2"> CNIC:</label>
				<div class="col-md-8">
				<input type="text" id="cnic" name="cnic" class="form-control"  value="<?PHP ECHO $cnic;  ?>" placeholder="e.g: 46603-445060-7"readonly required />
				</div>
				</div>
				<div class="form-group row">
				<label for="name" class="control-label col-md-2"> Name:</label>
				<div class="col-md-8">
					<div class="row">
						<div class="col-md-6">
							<input type="text" id="fname" name="fname" class="form-control" placeholder="enter First Name" value="<?PHP ECHO $fname;  ?>" required/>
						</div>
						
						<div class="col-md-6">
							<input type="text" id="lname" name="lname" class="form-control" placeholder="enter Last Name" value="<?PHP ECHO $lname; ?>" required/>
						</div>	
					</div>
				
				
				</div>
				</div>

				<div class="form-group row">
					<label class="control-label col-md-2">DOB:</label> 	
					<div class=" col-md-8">
					<input type="date" name="dob" class="form-control" value="<?PHP ECHO $dob;  ?>" required/>	
					</div>
				</div>
				

				<div class="form-group row">
				<label for="pass"class="control-label col-md-2">Address:</label>
				<div class="col-md-8">
				<textarea name="address" cols="12" rows="6" class="form-control"  placeholder="address"><?PHP ECHO $address;  ?></textarea>
				</div>
				</div>


				<div class="form-group row">
				<label for="pass"class="control-label col-md-2">City:</label>
				<div class="col-md-8">
						
						<select name="city" id="city"   class="form-control" required>
					    <option value="<?PHP ECHO $city;  ?>"><?PHP ECHO $city;  ?></option>
					    <option value="Islamabad">Islamabad</option>
					    <option value="" disabled>Punjab Cities</option>
					    <option value="Ahmed Nager Chatha">Ahmed Nager Chatha</option>
					    <option value="Ahmadpur East">Ahmadpur East</option>
					    <option value="Ali Khan Abad">Ali Khan Abad</option>
					    <option value="Alipur">Alipur</option>
					    <option value="Arifwala">Arifwala</option>
					    <option value="Attock">Attock</option>
					    <option value="Bhera">Bhera</option>
					    <option value="Bhalwal">Bhalwal</option>
					    <option value="Bahawalnagar">Bahawalnagar</option>
					    <option value="Bahawalpur">Bahawalpur</option>
					    <option value="Bhakkar">Bhakkar</option>
					    <option value="Burewala">Burewala</option>
					    <option value="Chillianwala">Chillianwala</option>
					    <option value="Chakwal">Chakwal</option>
					    <option value="Chichawatni">Chichawatni</option>
					    <option value="Chiniot">Chiniot</option>
					    <option value="Chishtian">Chishtian</option>
					    <option value="Daska">Daska</option>
					    <option value="Darya Khan">Darya Khan</option>
					    <option value="Dera Ghazi Khan">Dera Ghazi Khan</option>
					    <option value="Dhaular">Dhaular</option>
					    <option value="Dina">Dina</option>
					    <option value="Dinga">Dinga</option>
					    <option value="Dipalpur">Dipalpur</option>
					    <option value="Faisalabad">Faisalabad</option>
					    <option value="Fateh Jhang">Fateh Jang</option>
					    <option value="Ghakhar Mandi">Ghakhar Mandi</option>
					    <option value="Gojra">Gojra</option>
					    <option value="Gujranwala">Gujranwala</option>
					    <option value="Gujrat">Gujrat</option>
					    <option value="Gujar Khan">Gujar Khan</option>
					    <option value="Hafizabad">Hafizabad</option>
					    <option value="Haroonabad">Haroonabad</option>
					    <option value="Hasilpur">Hasilpur</option>
					    <option value="Haveli">Haveli</option>
					    <option value="Lakha">Lakha</option>
					    <option value="Jalalpur">Jalalpur</option>
					    <option value="Jattan">Jattan</option>
					    <option value="Jampur">Jampur</option>
					    <option value="Jaranwala">Jaranwala</option>
					    <option value="Jhang">Jhang</option>
					    <option value="Jhelum">Jhelum</option>
					    <option value="Kalabagh">Kalabagh</option>
					    <option value="Karor Lal Esan">Karor Lal Esan</option>
					    <option value="Kasur">Kasur</option>
					    <option value="Kamalia">Kamalia</option>
					    <option value="Kamoke">Kamoke</option>
					    <option value="Khanewal">Khanewal</option>
					    <option value="Khanpur">Khanpur</option>
					    <option value="Kharian">Kharian</option>
					    <option value="Khushab">Khushab</option>
					    <option value="Kot Adu">Kot Adu</option>
					    <option value="Jauharabad">Jauharabad</option>
					    <option value="Lahore">Lahore</option>
					    <option value="Lalamusa">Lalamusa</option>
					    <option value="Layyah">Layyah</option>
					    <option value="Liaquat Pur">Liaquat Pur</option>
					    <option value="Lodhran">Lodhran</option>
					    <option value="Malakwal">Malakwal</option>
					    <option value="Mamoori">Mamoori</option>
					    <option value="Mailsi">Mailsi</option>
					    <option value="Mandi Bahauddin">Mandi Bahauddin</option>
					    <option value="mian Channu">Mian Channu</option>
					    <option value="Mianwali">Mianwali</option>
					    <option value="Multan">Multan</option>
					    <option value="Murree">Murree</option>
					    <option value="Muridke">Muridke</option>
					    <option value="Mianwali Bangla">Mianwali Bangla</option>
					    <option value="Muzaffargarh">Muzaffargarh</option>
					    <option value="Narowal">Narowal</option>
					    <option value="Okara">Okara</option>
					    <option value="Renala Khurd">Renala Khurd</option>
					    <option value="Pakpattan">Pakpattan</option>
					    <option value="Pattoki">Pattoki</option>
					    <option value="Pir Mahal">Pir Mahal</option>
					    <option value="Qaimpur">Qaimpur</option>
					    <option value="Qila Didar Singh">Qila Didar Singh</option>
					    <option value="Rabwah">Rabwah</option>
					    <option value="Raiwind">Raiwind</option>
					    <option value="Rajanpur">Rajanpur</option>
					    <option value="Rahim Yar Khan">Rahim Yar Khan</option>
					    <option value="Rawalpindi">Rawalpindi</option>
					    <option value="Sadiqabad">Sadiqabad</option>
					    <option value="Safdarabad">Safdarabad</option>
					    <option value="Sahiwal">Sahiwal</option>
					    <option value="Sangla Hill">Sangla Hill</option>
					    <option value="Sarai Alamgir">Sarai Alamgir</option>
					    <option value="Sargodha">Sargodha</option>
					    <option value="Shakargarh">Shakargarh</option>
					    <option value="Sheikhupura">Sheikhupura</option>
					    <option value="Sialkot">Sialkot</option>
					    <option value="Sohawa">Sohawa</option>
					    <option value="Soianwala">Soianwala</option>
					    <option value="Siranwali">Siranwali</option>
					    <option value="Talagang">Talagang</option>
					    <option value="Taxila">Taxila</option>
					    <option value="Toba Tek  Singh">Toba Tek Singh</option>
					    <option value="Vehari">Vehari</option>
					    <option value="Wah Cantonment">Wah Cantonment</option>
					    <option value="Wazirabad">Wazirabad</option>
					    <option value="" disabled>Sindh Cities</option>
					    <option value="Badin">Badin</option>
					    <option value="Bhirkan">Bhirkan</option>
					    <option value="Rajo Khanani">Rajo Khanani</option>
					    <option value="Chak">Chak</option>
					    <option value="Dadu">Dadu</option>
					    <option value="Digri">Digri</option>
					    <option value="Diplo">Diplo</option>
					    <option value="Dokri">Dokri</option>
					    <option value="Ghotki">Ghotki</option>
					    <option value="Haala">Haala</option>
					    <option value="Hyderabad">Hyderabad</option>
					    <option value="Islamkot">Islamkot</option>
					    <option value="Jacobabad">Jacobabad</option>
					    <option value="Jamshoro">Jamshoro</option>
					    <option value="Jungshahi">Jungshahi</option>
					    <option value="Kandhkot">Kandhkot</option>
					    <option value="Kandiaro">Kandiaro</option>
					    <option value="Karachi">Karachi</option>
					    <option value="Kashmore">Kashmore</option>
					    <option value="Keti Bandar">Keti Bandar</option>
					    <option value="Khairpur">Khairpur</option>
					    <option value="Kotri">Kotri</option>
					    <option value="Larkana">Larkana</option>
					    <option value="Matiari">Matiari</option>
					    <option value="Mehar">Mehar</option>
					    <option value="Mirpur Khas">Mirpur Khas</option>
					    <option value="Mithani">Mithani</option>
					    <option value="Mithi">Mithi</option>
					    <option value="Mehrabpur">Mehrabpur</option>
					    <option value="Moro">Moro</option>
					    <option value="Nagarparkar">Nagarparkar</option>
					    <option value="Naudero">Naudero</option>
					    <option value="Naushahro Feroze">Naushahro Feroze</option>
					    <option value="Naushara">Naushara</option>
					    <option value="Nawabshah">Nawabshah</option>
					    <option value="Nazimabad">Nazimabad</option>
					    <option value="Qambar">Qambar</option>
					    <option value="Qasimabad">Qasimabad</option>
					    <option value="Ranipur">Ranipur</option>
					    <option value="Ratodero">Ratodero</option>
					    <option value="Rohri">Rohri</option>
					    <option value="Sakrand">Sakrand</option>
					    <option value="Sanghar">Sanghar</option>
					    <option value="Shahbandar">Shahbandar</option>
					    <option value="Shahdadkot">Shahdadkot</option>
					    <option value="Shahdadpur">Shahdadpur</option>
					    <option value="Shahpur Chakar">Shahpur Chakar</option>
					    <option value="Shikarpaur">Shikarpaur</option>
					    <option value="Sukkur">Sukkur</option>
					    <option value="Tangwani">Tangwani</option>
					    <option value="Tando Adam Khan">Tando Adam Khan</option>
					    <option value="Tando Allahyar">Tando Allahyar</option>
					    <option value="Tando Muhammad Khan">Tando Muhammad Khan</option>
					    <option value="Thatta">Thatta</option>
					    <option value="Umerkot">Umerkot</option>
					    <option value="Warah">Warah</option>
					    <option value="" disabled>Khyber Cities</option>
					    <option value="Abbottabad">Abbottabad</option>
					    <option value="Adezai">Adezai</option>
					    <option value="Alpuri">Alpuri</option>
					    <option value="Akora Khattak">Akora Khattak</option>
					    <option value="Ayubia">Ayubia</option>
					    <option value="Banda Daud Shah">Banda Daud Shah</option>
					    <option value="Bannu">Bannu</option>
					    <option value="Batkhela">Batkhela</option>
					    <option value="Battagram">Battagram</option>
					    <option value="Birote">Birote</option>
					    <option value="Chakdara">Chakdara</option>
					    <option value="Charsadda">Charsadda</option>
					    <option value="Chitral">Chitral</option>
					    <option value="Daggar">Daggar</option>
					    <option value="Dargai">Dargai</option>
					    <option value="Darya Khan">Darya Khan</option>
					    <option value="dera Ismail Khan">Dera Ismail Khan</option>
					    <option value="Doaba">Doaba</option>
					    <option value="Dir">Dir</option>
					    <option value="Drosh">Drosh</option>
					    <option value="Hangu">Hangu</option>
					    <option value="Haripur">Haripur</option>
					    <option value="Karak">Karak</option>
					    <option value="Kohat">Kohat</option>
					    <option value="Kulachi">Kulachi</option>
					    <option value="Lakki Marwat">Lakki Marwat</option>
					    <option value="Latamber">Latamber</option>
					    <option value="Madyan">Madyan</option>
					    <option value="Mansehra">Mansehra</option>
					    <option value="Mardan">Mardan</option>
					    <option value="Mastuj">Mastuj</option>
					    <option value="Mingora">Mingora</option>
					    <option value="Nowshera">Nowshera</option>
					    <option value="Paharpur">Paharpur</option>
					    <option value="Pabbi">Pabbi</option>
					    <option value="Peshawar">Peshawar</option>
					    <option value="Saidu Sharif">Saidu Sharif</option>
					    <option value="Shorkot">Shorkot</option>
					    <option value="Shewa Adda">Shewa Adda</option>
					    <option value="Swabi">Swabi</option>
					    <option value="Swat">Swat</option>
					    <option value="Tangi">Tangi</option>
					    <option value="Tank">Tank</option>
					    <option value="Thall">Thall</option>
					    <option value="Timergara">Timergara</option>
					    <option value="Tordher">Tordher</option>
					    <option value="" disabled>Balochistan Cities</option>
					    <option value="Awaran">Awaran</option>
					    <option value="Barkhan">Barkhan</option>
					    <option value="Chagai">Chagai</option>
					    <option value="Dera Bugti">Dera Bugti</option>
					    <option value="Gwadar">Gwadar</option>
					    <option value="Harnai">Harnai</option>
					    <option value="Jafarabad">Jafarabad</option>
					    <option value="Jhal Magsi">Jhal Magsi</option>
					    <option value="Kacchi">Kacchi</option>
					    <option value="Kalat">Kalat</option>
					    <option value="Kech">Kech</option>
					    <option value="Kharan">Kharan</option>
					    <option value="Khuzdar">Khuzdar</option>
					    <option value="Killa Abdullah">Killa Abdullah</option>
					    <option value="Killa Saifullah">Killa Saifullah</option>
					    <option value="Kohlu">Kohlu</option>
					    <option value="Lasbela">Lasbela</option>
					    <option value="Lehri">Lehri</option>
					    <option value="Loralai">Loralai</option>
					    <option value="Mastung">Mastung</option>
					    <option value="Musakhel">Musakhel</option>
					    <option value="Nasirabad">Nasirabad</option>
					    <option value="Nushki">Nushki</option>
					    <option value="Panjgur">Panjgur</option>
					    <option value="Pishin valley">Pishin Valley</option>
					    <option value="Quetta">Quetta</option>
					    <option value="Sherani">Sherani</option>
					    <option value="Sibi">Sibi</option>
					    <option value="Sohbatpur">Sohbatpur</option>
					    <option value="Washuk">Washuk</option>
					    <option value="Zhob">Zhob</option>
					    <option value="Ziarat">Ziarat</option>
					  </select>
				</div>
				</div>


				<div class="form-group row">
				<label for="email"class="control-label col-md-2">Sex:</label>
				<div class="col-md-8">
				<label><input type="radio" name="sex" value="Male" <?php if($sex=="Male"){echo "checked";}?> >Male</label>
				  <label><input type="radio" name="sex" value="Female" <?php if($sex=="Female"){echo "checked";}?>>Female</label>
				</div>
				</div>	

				<div class="form-group row">
				<label for="email"class="control-label col-md-2">Email:</label>
				<div class="col-md-8">
				<input type="text" name="email" id="email" class="form-control" value="<?PHP ECHO $email;  ?>" placeholder="e.g: abc@gmail.com" required/>
				</div>
				</div>


				<div class="form-group row">
					<label for="phone" class="control-label col-md-2">Phone:</label>
					<div class="col-md-8">
						<input type="text" name="phone" class="form-control" value="<?PHP ECHO $phone;  ?>" placeholder="e.g: 03045636135" required/>
					</div>
				</div>
				
				<div class="form-group row ">
					<div class=" col-md-1"></div>

				<button type="submit" value="submit" name="submit" class="btn btn-success col-md-4" onclick=""><span class="glyphicon glyphicon-send"></span> UPDATE</button>
				<div class=" col-md-1"></div>
				
			
				</div>
			</div>	
			</form>

	</div>
</div>
<?php  include_once('template/footer.php');?>