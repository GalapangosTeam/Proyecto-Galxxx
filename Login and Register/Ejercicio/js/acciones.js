function aparecelogin (){
	event.preventDefault();
	$("#login").animate({
		'top':'0'
	}, 500);
}
function desaparecelogin (){
	event.preventDefault();
	$("#login").animate({
		'top':'-100'
	}, 500);
}
function apareceRegistro(e){
	e.preventDefault();
	$("#oscurecer").fadeIn();

}
function mostrarLoginYRegistro(){
	$("#activarLogin").click(aparecelogin);
	$("#cerrar").click(desaparecelogin);

	$("#activarRegistro").click(apareceRegistro);
}
$(document).ready (mostrarlogin);