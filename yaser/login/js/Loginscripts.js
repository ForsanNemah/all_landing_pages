
function get() 
{

	$("#btnlogin").on("click", function() {	
	    

        const val = document.querySelector('input').value;
		// Ajax config
		$.ajax({
	        type: "GET", //we are using GET method to get data from server side
	        url: './login/php/getLoginAuth.php', // get the route value
	        data: {user_password:val}, //set data
			
	        beforeSend: function () {//We add this before send to disable the button once we submit it so that we prevent the multiple click
	           
	        },
	        success: function (response) {//once the request successfully process to the server side it will return result here
                response = JSON.parse(response);
                window.alert("welcome   "+response.name);
                window.open('./index.php','_self');
              
	        },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                window.alert(" wrong Password please try again  !   ");	
	        }
            

	    });
	})
}


$(document).ready(function() {

	// Get the data and view to modal
	get();
	 
	
});


//************************************* This Part to validate form inputs  *******************************************/
const passwordEl = document.querySelector('#password');

const login = document.querySelector('#login');


const checkPassword = () => {
    let valid = false;


    const password = passwordEl.value.trim();

    if (!isRequired(password)) {
        showError(passwordEl, 'Password cannot be blank.');
    }  else {
        showSuccess(passwordEl);
        valid = true;
    }

    return valid;
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

login.addEventListener('input', debounce(function (e) {
    switch (e.target.id) {     
        case 'password':
            checkPassword();
            break;
    }
}));

