</div>
<?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
<form class="form-group" action='' method="POST" >
							
	<div id="legend">
		<legend class="">Register</legend>
	</div>
	<div class="form-group">
	<!-- First Name -->
		<label>First Name</label>
		<input type="text" id="first_name" name="first_name" placeholder="Enter your First Name" class="form-control">
	</div>
	<div class="form-group">
	<!-- Last Name -->
		<label>Last Name</label>
		<input type="text" id="last_name" name="last_name" placeholder="Enter your Last Name" class="form-control">
	</div>
	<div class="form-group">
	<!-- User Name -->
		<label>User Name</label>
		<input type="text" id="username" name="username" placeholder="Enter your User Name" class="form-control">
	</div>
	<div class="form-group">
	<!-- Email -->
		<label>Email Address</label>
		<input type="text" id="email" name="email" placeholder="Enter your Email Address" class="form-control">
	</div>
	<div class="form-group">
	<!-- Password -->
		<label>Password</label>
		<input type="password" id="password" name="password" placeholder="Enter your Password" class="form-control">
	</div>
	<div class="form-group">
	<!-- confirm -->
		<label>Confirm Password</label>
		<input type="password" id="password2" name="password2" placeholder="Enter your password again" class="form-control">
	</div>
	<div class="control-group">
	<!-- Button -->
	<div class="controls">
		<button class="btn btn-success">Register</button>
	</div>
	</div>
		
</form>
