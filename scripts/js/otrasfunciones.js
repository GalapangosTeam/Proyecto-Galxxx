
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

//Funcion que muestra ocupaciones de acuerdo al genero seleccionado.
function genOcupacion(opc) { 
	var x = document.getElementById("listaOpcion");
	var opcion1 = document.createElement("option");
	var opcion2 = document.createElement("option");
	var opcion3 = document.createElement("option");
	var opciones=["Maestro", "Estudiante de Musica", "Otro", "Maestra", "Estudiante de Musica", "Otra"]
	//Metodo para limpiar la lista de opciones
	while (x.length > 0) {
    	x.remove(x.length-1);
	}
	  if(opc==1) { //Al seleccionar Masculino en el input de tipo Radio inserta las opciones a la lista.
	    	   	opcion1.text = opciones[0];
    			x.add(opcion1);
    			opcion2.text = opciones[1];
    			x.add(opcion2);
    			opcion3.text = opciones[2];
    			x.add(opcion3);
	  }else if(opc==2){ //Al seleccionar Femenino en el input de tipo Radio inserta las opciones a la lista.
	    		opcion1.text = opciones[3];
    			x.add(opcion1);
    			opcion2.text = opciones[4];
    			x.add(opcion2);
    			opcion3.text = opciones[5];
    			x.add(opcion3);	   
	  }else{
	  	console.log("ERROR AL SELECCIONAR UN GENERO")
	  }
}
