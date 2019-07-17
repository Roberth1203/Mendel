$(document).ready(function() {
    $('[id^=detail-]').show();
    $("#_inputNombre").val("");
	$("#_inputMail").val("");
	$("#_inputtel").val("");
	$("#_inputcomentario").val("");
	
	$('.ir-arriba').click(function(){
		$('body, html').animate({
			scrollTop: '0px'
		}, 300);
	});
 
	$(window).scroll(function(){
		if( $(this).scrollTop() > 0 ){
			$('.ir-arriba').slideDown(300);
		} else {
			$('.ir-arriba').slideUp(300);
		}
	});
});

function sendMail() {
	var name 	= ($("#_inputNombre").val() == "") ? "--" : $("#_inputNombre").val();
	var mail 	= ($("#_inputMail").val() == "") ? "--" : $("#_inputMail").val();
	var tel  	= ($("#_inputtel").val() == "") ? "--" : $("#_inputtel").val();
	var comment = ($("#_inputcomentario").val() == "") ? "--" : $("#_inputcomentario").val();

	var argumentos = { "name" : name, "mail" : mail, "tel" : tel, "comment" : comment };
	$.ajax({
		url: '../mail.php',
		type: 'GET',
		data: argumentos
	})
	.done(function(response) {
		debugger;
		if (response.includes("he email message was sent.") === true){
			alert("mensaje enviado");
		}
	})
	.fail(function(response) {
		alert("error");
	});
	
	$("#_inputNombre").val("");
	$("#_inputMail").val("");
	$("#_inputtel").val("");
	$("#_inputcomentario").val("");

}

function toBlog() {
    location.href = 'blog.php';
}