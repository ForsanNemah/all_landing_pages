

function all() 
{
	// Ajax config
	$.ajax({
        type: "GET", //we are using GET method to get all record from the server
        url: 'register/php/loadRegister.php', // get the route value
        success: function (response) {//once the request successfully process to the server side it will return result here
            
            // Parse the json result
        	response = JSON.parse(response);
			
		
            var html = "";
			var state,check;
			
            // Check if there is available records
			html += '<table class="table datatable" ><thead><td scope="col"></td><th scope="col">register name</th><th scope="col">Campaign</th><th scope="col">service</th><th scope="col">customer</th><th scope="col">source</th><th style="display:none" scope="col">Reg. Date</th><th scope="col">state</th></tr></thead>';
            if(response.length) {
				html += '<tbody >';
	            // Loop the parsed JSON
	            $.each(response, function(key,value) {
	            	// Our Register list template
					html += '<tr >';
					html += '<th scope="row" ><input class="form-check-input "  data-target="#edit-Register-modal" name="RegisterId" type="checkbox" id="getRegisterId" data_id="'+value.register_id+'"></th>';
					html += "<td>" + value.register_name + "</td>";
					html += "<td>" + value.camp_name + "</td>";
					html += "<td>" + value.service + "</td>";
					html += "<td>" + value.customer + "</td>";
					html += "<td>" + value.source + "</td>";
					html += "<td style='display:none'>" + value.date + "</td>";



					html += "<td>";
					if(value.register_state==0){
						state='waiting' ;
                        check='';
					}else if(value.register_state==1){
						state='active' ;
                        check='checked';
					}

					else{
						state='Blocked' ;
						check='';
					}
					html += '<div class="form-check form-switch "> <input class="form-check-input" onclick="toggleState('+value.register_id+')"  type="checkbox" id="flexSwitchCheckChecked" '+check+' ><label class="form-check-label" for="flexSwitchCheckChecked">'+state+'</label> </div>'
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

            

            // Insert the HTML Template and display all Register records
			$("#admins_list").html(html);
        }
    });
}

function resetForm(selector) 
{
	$(selector)[0].reset();
}


function get() 
{

	$(document).delegate("[data-target='#edit-Register-modal']", "click", function() {
		
		var RegisterId =$(this).attr('data_id');
		// Ajax config
		$.ajax({
	        type: "GET", //we are using GET method to get data from server side
	        url: 'register/php/getRegister.php', // get the route value
	        data: {Register_Id:RegisterId}, //set data
			
	        beforeSend: function () {//We add this before send to disable the button once we submit it so that we prevent the multiple click
	           
	        },
	        success: function (response) {//once the request successfully process to the server side it will return result here
				response = JSON.parse(response);
	            $("#edit-form [name=\"id\"]").val(response.id);

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

	            // Reload lists of Registers
	            all();

	            // We will display the result using alert
	            alert(response);

	            // Reset form
	            resetForm(form);
 
	        },
	        error: function (XMLHttpRequest, textStatus, errorThrown) {
	        }
	    });
	});
}
function ViewRegisters() 
{
	

	$("#btnView").on("click",function(){
		$("[name='RegisterId']").each(function(){
			if ($(this).is(':checked')) {
				 var RegisterId=$(this).attr("data_id");
			// Ajax config
			$.ajax({
				type: "get", 
				url: 'register/php/getRegister.php', 
				data: {Register_Id:RegisterId}, //set data
				beforeSend: function () {//We add this before send to disable the button once we submit it so that we prevent the multiple click
				},
				success: function (response) {//once the request successfully process to the server side it will return result here

					response = JSON.parse(response);
					$('#view_name').text(response.register_name);
					$('#view_customer').text(response.customer);
					$('#view_campaign').text(response.camp_name);
					$('#view_service').text(response.service);
					$('#view_source').text(response.source);
					$('#view_marketer').text(response.marketer_name);
					$('#view_info').text(response.info);
					$('#view_phone').text(response.phone);
					$('#view_reg').text(response.date);
					$('#view_note').text(response.note);
					if(response.register_state==0){
						$('#view_state').text('waiting');
						$('#view_state').style.color="yellow";
					}else if(response.register_state==1){
						$('#view_state').text('activ');
						$('#view_state').style.color="green";
					}

					else{
						$('#view_state').text('waiting');
						$('#view_state').style.color="red";
					}
	  
				},
				error: function (XMLHttpRequest, textStatus, errorThrown) {
				}
			});
			}
		}); 
	})
}
function deleteRegister() 
{ 

	$("#btndelete").on("click",function(){
		$("[name='RegisterId']").each(function(){
			if ($(this).is(':checked')) {
				 var RegisterId=$(this).attr("data_id");
				
			// Ajax config
			$.ajax({
				type: "POST", //we are using GET method to get data from server side
				url: 'register/php/deleteRegister.php', 
				data: {Register_Id:RegisterId}, //set data
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
function toggleState(RegisterId){
	// Ajax config
	$.ajax({
		type: "POST", //we are using GET method to get data from server side
		url: 'register/php/blockRegister.php', 
		data: {Register_Id:RegisterId}, //set data
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
function refresh() 
{
	
	$("#btnRefresh").on("click", function() {
     
		all();

	});
}

$(document).ready(function() {
  
	// Get all Registers records
	all();
    


	// Get the data and view to modal
	get();
	ViewRegisters();	
	deleteRegister();

	
	 	
});