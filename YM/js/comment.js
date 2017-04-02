$(document).ready( function() { comment() } )

function comment(){
	$('#second').hide();
	$('.pull-right').click(function(e) {
		e.preventDefault();
		$('#second').show();
	});
}