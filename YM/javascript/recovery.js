$(document).ready( function() { recovery() } )

function recovery(){
	$('.forgot-password').click(function(e) {
		e.preventDefault();
		$('div#form-login').css('display','none');
		$('div#form-olvidado').show();
	});
	$('#acceso').click(function(e) {
		e.preventDefault();
		$('div#form-olvidado').css('display','none');
		$('div#form-login').show();
	});
}