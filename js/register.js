
	var password = document.forms['vform']['password'];
	var password_confirmation = document.forms['vform']['password_confirmation'];

	
	var password_error = document.getElementById('password_error');


	password.addEventListener('blur', passwordVerify, true);

	function Validate() {
 		 if (password.value != password_confirmation.value) {
    		password.style.border = "1px solid red";
    		password_confirmation.style.border = "1px solid red";
    		password_error.innerHTML = "The two passwords do not match";
    		return false;
 		 }
	}

	function passwordVerify() {
  		if (password.value != "") {
  			password.style.border = "1px solid #5e6e66";
  			password_error.innerHTML = "";
  			return true;
 		 }
 	}
