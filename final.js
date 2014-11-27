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

	//Submisson of search box
	$("#searchBox").keyup(function(event){
    if(event.keyCode == 13){
        alert('search field submitted');
    }
});

	//Handles redirect to ad posting page
	$('#postBook').click(function() {
		window.location.href = "PostAd.php";
	});
});	
