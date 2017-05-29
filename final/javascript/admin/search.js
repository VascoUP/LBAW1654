$(document).ready(init);

function init() {
	
	$('#filter').click(function(){
		if($("#users").is(":checked")){
			$('#second').hide();
			$('#first').show();
		}
		else if($("#projs").is(":checked")){
				
			$('#first').hide();
			$('#second').show();
		}
	});
}