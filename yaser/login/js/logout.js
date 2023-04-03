

function logout() 
{

	$("#logout").on("click", function() {	
	    

		// Ajax config
		$.ajax({
	        type: "post", //we are using post method 
	        url: './login/php/logout.php', // get the route value
	        beforeSend: function () {//We add this  we prevent the multiple click
             window.alert("you are leaving");
	        },
	        success: function (response) {

               window.open('./login.html','_self')

	        }
	    });
	})
}
$(document).ready(function() {

	// fuvnction to call php file
	logout();
	 
	
});