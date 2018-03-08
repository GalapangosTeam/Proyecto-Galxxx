 $(function levantarParte_1() {
	$("#botonentrar").on("click",function(event){
	$(".parte_1").addClass("animated fadeOutUp");
	$(".btnAbrirLanding").addClass("animated fadeOut");
	$(".parte_2").addClass("animated fadeOutDown");
	});
	abrirIndex();
});

$(function abrirIndex(){
	("<a href='index.html'></a>");
	/*var $abrir = $("<a href='index.html'></a>");
	$abrir.addClass(".btnAbrirLanding");*/
});


//$.when(levantarParte_1()).then(abrirIndex());