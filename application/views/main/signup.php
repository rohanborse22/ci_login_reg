<main role="main" class="container">
	<div class="row">

		<div class="col">

		</div>
		<div class="col">
			<h1 class="text-center">signup</h1>
			<?php if($this->session->flashdata("error")){?>
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong><?php echo $this->session->flashdata("error");?></strong> 
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
              <?php }?>
			
			<form method="post" action="<?php echo base_url();?>login/signup">

			<h1>1st form</h2>
				<div class="form-group">
					<label for="exampleInputEmail1">Email address</label>
					<input type="text" name="data[0][name]"   class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
					<small id="emailHelp" class="form-text red-text text-muted"><?php echo form_error('data[0][name]')?></small>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Email address</label>
					<input type="email" name="data[0][username]"   class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
					<small id="emailHelp" class="form-text red-text text-muted"><?php echo form_error('data[0][username]')?></small>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" name="data[0][password]" class="form-control" id="exampleInputPassword1" placeholder="Password">
					<small id="emailHelp" class="form-text red-text text-muted"><?php echo form_error('data[0][password]')?></small>
				</div>
               <!-- <h2>2 From</h2>
			   <div class="form-group">
					<label for="exampleInputEmail1">Email address</label>
					<input type="text" name="data[1][name]"   class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
					<small id="emailHelp" class="form-text red-text text-muted"><?php echo form_error('data[0][name]')?></small>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Email address</label>
					<input type="email" name="data[1][username]"   class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
					<small id="emailHelp" class="form-text red-text text-muted"><?php echo form_error('data[0][username]')?></small>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" name="data[1][password]" class="form-control" id="exampleInputPassword1" placeholder="Password">
					<small id="emailHelp" class="form-text red-text text-muted"><?php echo form_error('data[0][password]')?></small>
				</div> -->
				<button type="submit" class="btn btn-primary" value="signup">Submit</button>
			</form>

		</div>
		<div class="col">

		</div>
	</div>



</main>