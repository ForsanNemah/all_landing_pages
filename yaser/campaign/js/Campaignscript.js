

function all() 
{
	// Ajax config
	$.ajax({
        type: "GET", //we are using GET method to get all record from the server
        url: 'campaign/php/loadCampaign.php', // get the route value
        success: function (response) {//once the request successfully process to the server side it will return result here
            
            // Parse the json result
        	response = JSON.parse(response);
			
		
            var html = "";
			var state,check;
            // Check if there is available records
			html += '<table class="table datatable able-striped " style=""><thead><td scope="col"></td><th scope="col">Customer</th><th scope="col">Campaign Name</th><th scope="col">Platform</th><th scope="col">Daily Exchange</th><th scope="col">registers</th><th scope="col">state</th></tr></thead>';
            if(response.length) {
				html += '<tbody >';
	            // Loop the parsed JSON
	            $.each(response, function(key,value) {
	            	// Our Campaign list template
					html += '<tr >';
					html += '<th scope="row" ><input class="form-check-input "  data-target="#edit-Campaign-modal" name="CampaignId" type="checkbox" id="getCampaignId" data_id="'+value.id+'"></th>';
					html += "<td>" + value.customer + "</td>";
					html += "<td>" + value.camp_name + "</td>";
					html += "<td>" + value.platform + "</td>";
					html += "<td>" + value.daily_exch + "</td>";
					html += "<td>" + value.registers + "</td>";
					html += "<td>";
					if(value.state==0){
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

            

            // Insert the HTML Template and display all Campaign records
			$("#admins_list").html(html);
        }
    });
}

function save() 
{
	$("#SaveData").on("click", function() {
		var $this 		    = $(this); //submit button selector using ID
        var $caption        = $this.html();// We store the html content of the submit button
        var form 			= "#addcampaign"; //defined the #form ID
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

	            // Reload lists of Campaigns
	            all();

	            // We will display the result using alert
	            alert(response);

	            // Reset form
	            resetForm(form);
			 

	        
	        },
	        error: function (XMLHttpRequest, textStatus, errorThrown) {
	        	// You can put something here if there is an error from submitted request
	        }
	    });
	});
}

function resetForm(selector) 
{
	$(selector)[0].reset();
}


function get() 
{

	$(document).delegate("[data-target='#edit-Campaign-modal']", "click", function() {
		
		var CampaignId =$(this).attr('data_id');
		// Ajax config
		$.ajax({
	        type: "GET", //we are using GET method to get data from server side
	        url: 'campaign/php/getCampaign.php', // get the route value
	        data: {Campaign_Id:CampaignId}, //set data
			
	        beforeSend: function () {//We add this before send to disable the button once we submit it so that we prevent the multiple click
	           
	        },
	        success: function (response) {//once the request successfully process to the server side it will return result here
				response = JSON.parse(response);
	            $("#edit-form [name=\"id\"]").val(response.id);
	            $("#edit-form [name=\"name\"]").val(response.camp_name);
	            $("#edit-form [name=\"link\"]").val(response.camp_link);
	            $("#edit-form [name=\"start_date\"]").val(response.start_date);
				$("#edit-form [name=\"exp_date\"]").val(response.exp_date);
	            $("#edit-form [name=\"daily_exch\"]").val(response.daily_exch);
				$("#edit-form [name=\"platform\"]").val(response.ads_platform);
	        }
	    });
        

	})
}



function ViewCampaign() 
{

	$("#btnView").on("click",function(){
		$("[name='CampaignId']").each(function(){
			if ($(this).is(':checked')) {
				 var campaignId=$(this).attr("data_id");
			
			// Ajax config
			$.ajax({
				type: "get", 
				url: 'campaign/php/getCampaign.php', 
				data: {Campaign_Id:campaignId}, //set data
				beforeSend: function () {//We add this before send to disable the button once we submit it so that we prevent the multiple click
				},
				success: function (response) {//once the request successfully process to the server side it will return result here
	                 
					response = JSON.parse(response);
					$('#view_name').text(response.camp_name);
					$('#view_customer').text(response.customer);
					$('#view_platform').text(response.platform);
					$('#view_daily').text(response.daily_exch);
					$('#view_start').text(response.start_date);
					$('#view_expair').text(response.exp_date);
					$('#view_link').text(response.link);
					$('#view_registers').text(response.registers);
					if(response.state==1){
						$('#view_state').text('Blocked');
					}
					if(response.state==0){
					  $('#view_state').text('activ');
					}
					
	  
				},
				error: function (XMLHttpRequest, textStatus, errorThrown) {
				}
			});
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

	            // Reload lists of Campaigns
	            all();

	            // We will display the result using alert
	            alert(response);

	            // Reset form
	            resetForm(form);

	            // Close modal
	        },
	        error: function (XMLHttpRequest, textStatus, errorThrown) {
	        }
	    });
	});
}


function deleteCampaign() 
{ 

	$("#btndelete").on("click",function(){
		$("[name='CampaignId']").each(function(){
			if ($(this).is(':checked')) {
				 var campaignId=$(this).attr("data_id");
				
			// Ajax config
			$.ajax({
				type: "POST", 
				url: 'campaign/php/deleteCampaign.php', 
				data: {Campaign_Id:campaignId}, //set data
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
function toggleState(CampaignId){
	// Ajax config
	$.ajax({
		type: "POST", //we are using GET method to get data from server side
		url: 'campaign/php/blockCampaign.php', 
		data: {Campaign_Id:CampaignId}, //set data
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


		// get customers for the list box

function getCustomer() 
{
	$("#btnaddcampaign").on("click", function() {
     
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
$(document).ready(function() {

	// Get all Campaigns records
	all();
    
	// Submit form using AJAX To Save Data
	save();

	// Get the data and view to modal
	get();
	 
	// Updating the data
	update();
	// refresh data
	refresh(); 
	
	deleteCampaign();

	getCustomer();

	ViewCampaign();
});

