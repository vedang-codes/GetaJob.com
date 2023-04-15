
// For confirming the password
function checkPassword() {
  var password = document.getElementById("password");
  var confirm_pwd = document.getElementById("confirmpwd");

  if (password.value != confirm_pwd.value) {
    confirm_pwd.setCustomValidity("Passwords do not match");
  } else {
    confirm_pwd.setCustomValidity("");
  }
}

// For checking the type of user
$(document).ready(function(){
	$('#loginForm').submit(function(e){
		e.preventDefault();
		var email = $('#email').val();
		var password = $('#password').val();
		var usercode = $('#usercode').val();
		$.ajax({
			type: "POST",
			url: "login_validation.php",
			data: {email:email, password:password, usercode:usercode},
			success: function(response){
				console.log(response);
				if(response.trim() == ''){
					if(usercode == 1){
						window.location.href = "job_seeker.php";
					}else{
						window.location.href = "recruiter.php";
					}
				}else{
					$('#message').html(response);
				}
			}
		});
	});
});