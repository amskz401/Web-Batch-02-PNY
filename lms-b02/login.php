<?php include("layouts/header.php"); ?>
	<div class="header-bottom bg-secondary bg-gradient text-center text-white text-justify-content" style="height: 150px;">
		<h1>Login</h1>
		<p>Home Page > Login</p>
	</div>
	<div class="container">
		
		<div class="row mt-5">
			<h1 class="text-center mb-3">Login</h1>
			<div class="col-md-6 mx-auto">
				<div class="alert alert-danger fw-bold" role="alert">
					Invalid Username/Email Password
				</div>
				<form action="">
					
					<div class="form-group">
						<label><strong>Email</strong></label>
						<input type="" name="" class="form-control" required>
						<small class="text-danger">Email is required</small>
					</div>
					<div class="form-group">
						<label><strong>Password</strong></label>
						<input type="" name="" class="form-control" required>
						<small class="text-danger">Email is required</small>
					</div>
					
					
					<input type="submit" class="btn btn-success mt-3 text-end shadow" value="Login" name="">

				</form>
			</div>
		</div>
		
	</div>
<?php include("layouts/footer.php"); ?>
