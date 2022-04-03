<html>
	<head>
		<title>Register</title>	
		<link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.css';?>">
	</head>
	<body>
		<div class="container">
			<?php
			$msg = $this->session->flashdata('msg');
			if ($msg != "") {
                 echo "<div class ='alert alert-success'>'$msg'</div>";
			}
			
			?>
			<div class="col-md-6">
			<div class="card mt-4">
  <div class="card-header">
    Register Here
  </div>

<form action="<?php echo base_url().'index.php/Auth/register'?>" name="registerForm" id="registerForm" method ="post">

  <div class="card-body register">

   <p class="card-text">Bilgilerinizi Girin</p>
   <div class="form-group">
	   <label for="name">First Name</label>
	   <input type = "text" name="first_name" id="first_name" value="" class="form-control" placeholder="First Name">
       <p><?php echo form_error(field:'first_name');?></p>
   </div>
   <div class="form-group">
	   <label for="name">Last Name</label>
	   <input type = "text" name="last_name" id="last_name" value="" class="form-control" placeholder="Last Name">
       <p><?php echo form_error(field:'last_name');?></p>
   </div>
   <div class="form-group">
	   <label for="name">Email</label>
	   <input type = "text" name="email" id="email" value="" class="form-control" placeholder="Email">
       <p><?php echo form_error(field:'email');?></p>
   </div>
   <div class="form-group">
	   <label for="name">Phone</label>
	   <input type = "text" name="phone" id="phone" value="" class="form-control" placeholder="Phone">
       <p><?php echo form_error(field:'phone');?></p>
   </div>
   <div class="form-group">
	   <label for="name">Password</label>
	   <input type = "password" name="password" id="password" value="" class="form-control" placeholder="Password">
       <p><?php echo form_error(field:'password');?></p>
   </div>
   <div class="form-group">
	   <button class="btn btn-block btn-primary">REGİSTER</button>
   </div>
  </div>

  </form>




</div>
			</div>
		</div>

	</body>



</html>