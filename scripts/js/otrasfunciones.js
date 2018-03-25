
//Funcion para escoger el usuario que se registrará:
// 		si es un admin ó un usuario en general.
$(document).ready(function() {
	//de la clase escogido que tienen los 2 radiobuttons
	$(".escogido").click(function(evento){

       	// al seleccionarse se cacha el valor de cada uno y se hace comparacion
       	//con su nombre de "value", que cada uno esta diferente
        var valor = $(this).val();
        if(valor == 'admins'){
            $("#formAdmins").css("display", "block");
            $("#formNormales").css("display", "none");
        }else{
            $("#formAdmins").css("display", "none");
           	$("#formNormales").css("display", "block");
            }
    });
});

function escogerSexo(){
  $("#btnenviar").click(function () {  
        var valor = $(this).val();

        if(valor == 'mas'){
           
        }else if(valor == 'fem'){
            
        }else if(valor == 'otro'){

        }else{//es por que selecciono desconocido.

        }

    });
}

/*VENTANA MODAL*/
document.getElementsByClassName("enlaceOpcion")[0].click();

function opcModal(evt, opcion) {
  var i, x, enlaceOpcion;
  x = document.getElementsByClassName("opcion");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  enlaceOpcion = document.getElementsByClassName("enlaceOpcion");
  for (i = 0; i < x.length; i++) {
    enlaceOpcion[i].classList.remove("w3-light-grey");
  }
  document.getElementById(opcion).style.display = "block";
  evt.currentTarget.classList.add("w3-light-grey");
}
/* CALENDARIO PARA REGISTRO*/

$('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
});