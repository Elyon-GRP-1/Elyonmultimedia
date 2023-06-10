$(document).ready(function(){
		

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

	$("#admin-login-form").on("submit", function(e){
		e.preventDefault();

		$.ajax({
			url : 'api/adminLogin',
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
					window.location.href = "index.php";
				} else {
					$(".message").html('<span class="text-danger">'+resp.message+'</span>');
				}
			}
		}); 

	});

});