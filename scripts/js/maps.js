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
<<<<<<< HEAD:scripts/maps.js
/*
$('.formulario').find('input, textarea').on('keyup blur focus', function (e) {
  
  var $this = $(this),
      label = $this.prev('label');

	  if (e.type === 'keyup') {
			if ($this.val() === '') {
          label.removeClass('active highlight');
        } else {
          label.addClass('active highlight');
        }
    } else if (e.type === 'blur') {
    	if( $this.val() === '' ) {
    		label.removeClass('active highlight'); 
			} else {
		    label.removeClass('highlight');   
			}   
    } else if (e.type === 'focus') {
      
      if( $this.val() === '' ) {
    		label.removeClass('highlight'); 
			} 
      else if( $this.val() !== '' ) {
		    label.addClass('highlight');
			}
    }

});

$('.tab a').on('click', function (e) {
  
  e.preventDefault();
  
  $(this).parent().addClass('active');
  $(this).parent().siblings().removeClass('active');
  
  target = $(this).attr('href');

  $('.tab-content > div').not(target).hide();
  
  $(target).fadeIn(600);
  
}); */

=======
>>>>>>> mockupsminePeter:scripts/js/maps.js
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
<<<<<<< HEAD:scripts/maps.js
        });
=======
});
>>>>>>> mockupsminePeter:scripts/js/maps.js
