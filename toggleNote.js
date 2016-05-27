$(document).ready(function(){
	toggleFields();
	$("#selection").change(function(){
		toggleFields();
	});
});
function toggleFields(){
	if($("#selection").val() == "VetNote"){
		$("#vetOP").show();
		$("#farOP").hide();
	}	
	else if($("#selection").val() == "FarrierNote"){
		$("#vetOP").hide();
		$("#farOP").show();
	}
	else{
		$("#vetOP").hide();
		$("#farOP").hide();
	}
}