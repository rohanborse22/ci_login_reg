<main role="main" class="container">
	<div class="row">

		<div class="col">

		</div>
		<div class="col">
			<h1 class="text-center">Login</h1>
			<?php if($this->session->flashdata("error")){?>
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong><?php echo $this->session->flashdata("error");?></strong> 
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
              <?php }?>
			
			<form method="post" action="<?php echo base_url();?>login/login_validation">
				<div class="form-group">
					<label for="exampleInputEmail1">Email address</label>
					<input type="email" name="username"   class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
					<small id="emailHelp" class="form-text red-text text-muted"><?php echo form_error('username')?></small>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
					<small id="emailHelp" class="form-text red-text text-muted"><?php echo form_error('password')?></small>
				</div>
				<button type="submit" class="btn btn-primary" value="login">Submit</button>
			</form>

		</div>
		<div class="col">

		</div>
	</div>



</main>