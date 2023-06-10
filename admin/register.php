<?php require_once "templates/top.php"; ?>
<?php include "templates/navbar.php"; ?>

<div class="container">
	<div class="row justify-content-center" style="margin:100px 0;">
		<div class="col-md-4">
			<h4 class="text-center">Admin Registration</h4>
			<p class="message"></p>
			<form id="admin-register-form" method="post">

			  <div class="form-group">
			    <label for="name">Full Name</label>
			    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" required>
			  </div>

			  <div class="form-group">
			    <label for="email">Email Address</label>
			    <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
			  </div>

			  <div class="form-group">
			    <label for="password">Password</label>
			    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
			  </div>

			  <div class="form-group">
			    <label for="cpassword">Confirm Password</label>
			    <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="Password">
			  </div>

			  <input type="hidden" name="admin_register" value="1">
			  <button type="submit" class="btn btn-primary register-btn">Register</button>
			</form>
		</div>
	</div>
</div>

	<script src="js_packages/jquery-3.6.4.js"></script>
	<script>
		$(document).ready(function() {
			
			$("#admin-register-form").submit(function(e){
				e.preventDefault();
				
				$.ajax({
					url : 'api/adminRegister',
					method : "POST",
					data : new FormData(this),
					contentType: false,
					cache: false,
					processData: false,
					success : function(response){
						console.log(response);
						var resp = $.parseJSON(response);
						console.log(resp)
						if (resp.success) {
							window.location.href = "login.php";
						} else {
							$(".message").html('<span class="text-danger">'+resp.message+'</span>');
						}
					}
				});

			}); 

		});
	</script>
	<script type="text/javascript" src="js/main.js"></script>

</body>
</html>
