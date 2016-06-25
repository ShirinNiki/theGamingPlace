<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  

    <title>The GamingPlace</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet">

	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo base_url();?>assets/js/ie10-viewport-bug-workaround.js"></script>
  
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url();?>">The GamingPlace</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo base_url();?>">Home</a></li>
			<?php if(!$this->session->userdata('logged_in')): ?>
            <li><a href="<?php echo base_url();?>users/register">Create Account</a></li>
			<?php endif; ?>
		</ul>
		 <?php if(!$this->session->userdata('logged_in')): ?>
		 <form method="post" action="<?php echo base_url();?>users/login" class="navbar-form navbar-right" >
           <div class="form-group">
                <input name="username" type="text" class="form-control" placeholder="Enter UserName">
           </div>
		    <div class="form-group">
                <input name="password" type="password" class="form-control" placeholder="Enter Password">
           </div>
               <button name="submit" type="submit" class="btn btn-default">login</button>
         </form>
		 <?php else : ?>
			<form class="navbar-form navbar-right" method="post" action="<?php echo base_url();?>users/logout">
				<button name="submit" type="submit" class="btn btn-default">logOut</button>
			</form>
		 <?php endif; ?>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
		<div class="row">
			<div class="col-md-4">
					<?php  $this->load->view('layouts/includes/sidebar'); ?>
					</div>
				</div>
			
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-heading panel-heading-green">TheGamingPlace</div>
					<div class="panel-body">
						<div class="row">