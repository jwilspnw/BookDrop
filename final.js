$(document).ready(function() {

	//Function to change placeholder text
	$('#searchFilter').change(function() {
		var selectVal = $('#searchFilter').val();
		if(selectVal == 'classNum'){
			$('#searchBox').attr("placeholder", "CS250");
		}else if(selectVal == "prof"){
			$('#searchBox').attr("placeholder", "Jagodzinski");
		}else{
			$('#searchBox').attr("placeholder", "Computer Science");
		}		
	});

	//Submisson of ad
	$('#adSubmit').click(function() {
		$('#adForm').submit();
	});

	//Handles redirect to ad posting page
	$('#postBook').click(function() {
		window.location.href = "PostAd.php";
	});

	//Form validation
	$( "#adForm" ).submit(function( event ) {
		var errMsg = '';
		var hasErr = false;
		if (!$.isNumeric($('#classField').val())) {  
		  	hasErr = true;
		  	errMsg += 'The class number must be a number\n';
		}

		if ($('#titleField').val() == "") {  
		  	hasErr = true;
		  	errMsg += 'The title is required\n';
		}

		if ($('#profField').val() == "") {  
		  	hasErr = true;
		  	errMsg += 'The professor is required\n';
		}		

		if ($('#nameField').val() == "") {  
		  	hasErr = true;
		  	errMsg += 'The name is required\n';
		}

		if ($('#emailField').val() == "") {  
		  	hasErr = true;
		  	errMsg += 'The email is required\n';
		}

		if(hasErr){
			alert(errMsg);
			event.preventDefault();
		}else{
			return;
		}	
	});

});	
