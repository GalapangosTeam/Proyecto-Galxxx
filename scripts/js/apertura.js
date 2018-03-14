$("#botonentrar").click(function levantarCortinas(event){
	
	$(".parte_1").addClass("animated fadeOutUp");
	$(".btnAbrirLanding").addClass("animated fadeOut");
	$(".parte_2").addClass("animated fadeOutDown");
	$('<meta http-equiv="refresh" content="0.5;url=indexx.html"/>').appendTo($('head'));;
});
