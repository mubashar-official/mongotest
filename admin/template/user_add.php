<button class="btn btn-primary"data-toggle="modal" data-target="#modal4"></button>
		<div id="modal4"class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
				<button class="close" data-dismiss="modal">&times;</button>
				<div class="modal-title"><h4>Add New User </h4> </div>
				</div>
				<div class="modal-body">
				<form class="horizontal" action="template/user_save.php" method="POST">
				<div class="row">
					
					<div class="col-md-8">Name</div>
						
				</div>	
				<div class="row">
					<div class="col-md-8"> 
					<input type="text" name="name" class="form-control" required/>
					</div>
					
				</div>
				<div class="row">
				<div class="col-md-8"><h5>User Name</h5></div>
				</div>
			<div class="form-group row">
			<div class="col-md-8">
			<input type="text" class="form-control" name="username" required/>
				
			</div>
			</div>
			<div class="row">
				<div class="col-md-8"><h5>Password</h5></div>
			</div>
			<div class="form-group row">
			<div class="col-md-8">
			<input type="text" class="form-control" name="password" required/>
			</div>
			</div>

			<div class="row">
				<div class="col-md-8">
				<h5>Account type</h5>
				</div>
			</div>
			<div class="form-group row">
			<div class="col-md-8">
				<select name="ac_type" class="form-control">
				
				<option value="admin" selected> Admin</option>
				
	
				</select>
			</div>
			</div>
			<div class="form-group row">
				<div class="col-md-4">
			<input type="submit" name="submit" value="Add Product" class="btn btn-primary">
			</div>
			</div>
		</form>

				</div>
			</div>
		</div>
		</div>



<?php
		


?>