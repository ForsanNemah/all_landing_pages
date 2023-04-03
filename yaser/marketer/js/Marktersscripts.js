

function all() 
{
	// Ajax config
	$.ajax({
        type: "GET", //we are using GET method to get all record from the server
        url: 'marketer/php/loadMarketers.php', // get the route value
        success: function (response) {//once the request successfully process to the server side it will return result here
            
            // Parse the json result
        	response = JSON.parse(response);
			
		
            var html = "";
			var state,check;
			
            // Check if there is available records
			html += '<table class="table datatable" ><thead><tr><th scope="col"></th><th scope="col">Name</th><th scope="col">password</th><th scope="col">customer</th><th scope="col">Register Date</th><th scope="col">statue</th></tr></thead>';
            if(response.length) {
				html += '<tbody >';
	            // Loop the parsed JSON
	            $.each(response, function(key,value) {
	            	// Our Marketers list template
					html += '<tr >';
					html += '<th scope="row" ><input class="form-check-input ml-lg-2 ml-md-2"  data-target="#edit-Marketer-modal" name="MarketerId" type="checkbox" id="getMarketerId" data_id="'+value.id+'"></th>';
					html += "<td>" + value.name + "</td>";
					html += "<td>" + value.password + "</td>";
					html += "<td>" + value.customer + "</td>";
					html += "<td>" + value.added_date + "</td>";
					html += "<td>";
					if(value.block==0){
						state='active' ;
                        check='checked';
					}
					else{
						state='Blocked' ;
						check='';
					}
					html += '<div class="form-check form-switch"> <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" onclick="toggleState('+value.id+')"  '+check+' ><label class="form-check-label" for="flexSwitchCheckChecked">'+state+'</label> </div>'
					html += '</td>';
					html += '</tr>';
	            });
				html += '</tbody >';
            } else {
            	html += '<div class="alert alert-warning">';
				  html += 'No records found!';
				html += '</div>';
            }
			html += '</table>';

            

            // Insert the HTML Template and display all Marketer records
			$("#admins_list").html(html);
        }
    });
}

function save() 
{
	$("#SaveData").on("click", function() {
		var $this 		    = $(this); //submit button selector using ID
        var $caption        = $this.html();// We store the html content of the submit button
        var form 			= "#addform"; //defined the #form ID
        var formData        = $(form).serializeArray(); //serialize the form into array
        var route 			= $(form).attr('action'); //get the route using attribute action
		let isUsernameValid = checkUsername(),
        isPasswordValid = checkPassword(),
        isConfirmPasswordValid = checkConfirmPassword();

        let isFormValid = isUsernameValid &&
        isPasswordValid &&
        isConfirmPasswordValid;
        // submit to the server if the form is valid
        if (isFormValid) {
        // Ajax config
    	$.ajax({
	        type: "POST", //we are using POST method to submit the data to the server side
	        url: route, // get the route value
	        data: formData, // our serialized array data for server side
	        beforeSend: function () {//We add this before send to disable the button once we submit it so that we prevent the multiple click
	            $this.attr('disabled', true).html("Processing...");
	        },
	        success: function (response) {//once the request successfully process to the server side it will return result here
	            $this.attr('disabled', false).html($caption);

	            // Reload lists of Marketers
	            all();

	            // We will display the result using alert
	            alert(response);

	            // Reset form
	            resetForm(form);
			 

	            // Close modal
	            ('#add-Marketer-modal').modal('toggle');
	        },
	        error: function (XMLHttpRequest, textStatus, errorThrown) {
	        	// You can put something here if there is an error from submitted request
	        }
	    });
	}
	});
}

function resetForm(selector) 
{
	$(selector)[0].reset();
}


function get() 
{

	$(document).delegate("[data-target='#edit-Marketer-modal']", "click", function() {
		
		var MarketerId =$(this).attr('data_id');
		// Ajax config
		$.ajax({
	        type: "GET", //we are using GET method to get data from server side
	        url: 'marketer/php/getMarketers.php', // get the route value
	        data: {Marketer_Id:MarketerId}, //set data
			
	        beforeSend: function () {//We add this before send to disable the button once we submit it so that we prevent the multiple click
	           
	        },
	        success: function (response) {//once the request successfully process to the server side it will return result here
				response = JSON.parse(response);
	            $("#edit-form [name=\"id\"]").val(response.id);
	            $("#edit-form [name=\"name\"]").val(response.name);
	            $("#edit-form [name=\"password\"]").val(response.password);
	            $("#edit-form [name=\"state\"]").val(response.block);
	        }
		

	    });
        

	})
}

function update() 
{
	$("#btnUpdateSubmit").on("click", function() {
		var $this 		    = $(this); //submit button selector using ID
        var $caption        = $this.html();// We store the html content of the submit button
        var form 			= "#edit-form"; //defined the #form ID
        var formData        = $(form).serializeArray(); //serialize the form into array
        var route 			= $(form).attr('action'); //get the route using attribute action

        // Ajax config
    	$.ajax({
	        type: "POST", //we are using POST method to submit the data to the server side
	        url: route, // get the route value
	        data: formData, // our serialized array data for server side
	        beforeSend: function () {//We add this before send to disable the button once we submit it so that we prevent the multiple click
	            $this.attr('disabled', true).html("Processing...");
	        },
	        success: function (response) {//once the request successfully process to the server side it will return result here
	            $this.attr('disabled', false).html($caption);

	            // Reload lists of Marketers
	            all();

	            // We will display the result using alert
	            alert(response);

	            // Reset form
	            resetForm(form);

	            // Close modal
	            $('#edit-Marketer-modal').modal('toggle');
	        },
	        error: function (XMLHttpRequest, textStatus, errorThrown) {
	        }
	    });
	});
}


function deleteMarketer() 
{ 

	$("#btndelete").on("click",function(){
		$("[name='MarketerId']").each(function(){
			if ($(this).is(':checked')) {
				 var MarketerId=$(this).attr("data_id");
				
			// Ajax config
            $.ajax({
				type: "POST", //we are using GET method to get data from server side
				url: 'marketer/php/deleteMarketers.php', 
				data: {Marketer_Id:MarketerId}, //set data
				beforeSend: function () {//We add this before send to disable the button once we submit it so that we prevent the multiple click
				},
				success: function (response) {//once the request successfully process to the server side it will return result here
	
					// Reload lists of users
					all();
	
					// We will display the result using alert
					alert(response);
	  
				},
				error: function (XMLHttpRequest, textStatus, errorThrown) {
				}
			});
			}
		}); 
	})
	
}

// to block or unblock using custom checkbox
function toggleState(MarketerId){
	// Ajax config
	$.ajax({
		type: "POST", //we are using GET method to get data from server side
		url: 'marketer/php/blockMarketer.php', 
		data: {Marketer_Id:MarketerId}, //set data
		beforeSend: function () {//We add this before send to disable the button once we submit it so that we prevent the multiple click
		},
		success: function (response) {//once the request successfully process to the server side it will return result here

			// Reload lists of users
			all();

			// We will display the result using alert
			alert(response);

		},
		error: function (XMLHttpRequest, textStatus, errorThrown) {
		}
	});
	
}

		// get customers for the list box

		function getCustomer() 
		{
			$("#btnaddmarketer").on("click", function() {
		
				// Ajax config
				$.ajax({
					
					type: "GET", //we are using GET method to get data from server side
					url: 'customer/php/loadCustomer.php', // get the route value
					success: function (response) {//once the request successfully process to the server side it will return result here
						response = JSON.parse(response);
		
						if(response.length) {
							var html = "";
							html+='<select class="form-select" id="floatingSelect" name="customer" aria-label="State">';
							$.each(response, function(key,value) {
								html += "<option value='"+value.id+"'>"+value.name+"</option>";
							});
							html+='</select>';
						}
						$("#select-customer").html(html);
					}
				
				});
				
		
			});
		}
function refresh() 
{
	
	$("#btnRefresh").on("click", function() {
     
		all();

	});
}
$(document).ready(function() {

	// Get all Marketers records
	all();
    
	// Submit form using AJAX To Save Data
	save();

	// Get the data and view to modal
	get();
	 
	// Updating the data
	update();
	// refresh data
	refresh(); 

	deleteMarketer();
		// get customers to the add marketer list box to allow admin to add marketer to specific customer d
	getCustomer() 
});


//************************************* This Part to validate form inputs  *******************************************/

const usernameEl = document.querySelector('#name');
const passwordEl = document.querySelector('#password');
const confirmPasswordEl = document.querySelector('#confirm-password');
const addform = document.querySelector('#addform');

const checkUsername = () => {

    let valid = false;

    const min = 3,
        max = 25;

    const username = usernameEl.value.trim();

    if (!isRequired(username)) {
        showError(usernameEl, 'Username cannot be blank.');
    } else if (!isBetween(username.length, min, max)) {
        showError(usernameEl, `Username must be between ${min} and ${max} characters.`)
    } else {
        showSuccess(usernameEl);
        valid = true;
    }
    return valid;
};


const checkPassword = () => {
    let valid = false;


    const password = passwordEl.value.trim();

    if (!isRequired(password)) {
        showError(passwordEl, 'Password cannot be blank.');
    } else if (!isPasswordSecure(password)) {
        showError(passwordEl, 'Password must has at least 8 characters that include at least 1 lowercase character, 1 uppercase characters, 1 number, and 1 special character in (!@#$%^&*)');
    } else {
        showSuccess(passwordEl);
        valid = true;
    }

    return valid;
};

const checkConfirmPassword = () => {
    let valid = false;
    // check confirm password
    const confirmPassword = confirmPasswordEl.value.trim();
    const password = passwordEl.value.trim();

    if (!isRequired(confirmPassword)) {
        showError(confirmPasswordEl, 'Please enter the password again');
    } else if (password !== confirmPassword) {
        showError(confirmPasswordEl, 'The password does not match');
    } else {
        showSuccess(confirmPasswordEl);
        valid = true;
    }

    return valid;
};


const isPasswordSecure = (password) => {
    const re = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
    return re.test(password);
};

const isRequired = value => value === '' ? false : true;
const isBetween = (length, min, max) => length < min || length > max ? false : true;


const showError = (input, message) => {
    // get the form-field element
    const formField = input.parentElement;
    // add the error class
    formField.classList.remove('success');
    formField.classList.add('error');

    // show the error message
    const error = formField.querySelector('small');
    error.textContent = message;
};

const showSuccess = (input) => {
    // get the form-field element
    const formField = input.parentElement;

    // remove the error class
    formField.classList.remove('error');
    formField.classList.add('success');

    // hide the error message
    const error = formField.querySelector('small');
    error.textContent = '';
}

const debounce = (fn, delay = 500) => {
    let timeoutId;
    return (...args) => {
        // cancel the previous timer
        if (timeoutId) {
            clearTimeout(timeoutId);
        }
        // setup a new timer
        timeoutId = setTimeout(() => {
            fn.apply(null, args)
        }, delay);
    };
};

addform.addEventListener('input', debounce(function (e) {
    switch (e.target.id) {
        case 'name':
            checkUsername();
            break;
        case 'password':
            checkPassword();
            break;
        case 'confirm-password':
            checkConfirmPassword();
            break;
    }
}));