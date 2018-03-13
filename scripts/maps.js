function initMap() {
        var uluru = {lat: -25.363, lng: 131.044};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
}

/*VENTANA MODAL*/
document.getElementsByClassName("tablink")[0].click();
function opcModal(evt, nombre) {
  var i, x, tablinks;
  x = document.getElementsByClassName("opcion");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].classList.remove("w3-light-grey");
  }
  document.getElementById(nombre).style.display = "block";
  evt.currentTarget.classList.add("w3-light-grey");
}
/* CALENDARIO PARA REGISTRO*/
$('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
});

/*Busqueda*/
$(function hacerBusqueda() {
  // Variable que recoge el resultado de la consulta sobre la tabla Provincias, Jquery trabajará sobre este resultado para dinamizar el funcionamiento.
  var availableTags = [<?php echo $opciones ?>];
  $(".buscarcolo").autocomplete({
  source: availableTags
  });

});