$(function() {
    // Get the form.
    var form = $('#formulario');

    var toastexito = $('<span>El registro se realizo con exito</span>');
    var toastrekt = $('<span>Hubo un error en el registro, intentalo denuevo</span>');

    // Set up an event listener for the contact form.
	$(form).submit(function(event) {
    // Stop the browser from submitting the form.
    event.preventDefault();

    var formData = $(form).serialize();

	// Submit the form using AJAX.
	$.ajax({
    	type: 'GET',
    	url: 'http://www.donacion.onetecstudio.com/registrotopkek.php',
    	data: formData,
    	dataType: 'text',
    	success: function(response){
    		if(response=="1"){
    			Materialize.toast(toastexito, 5000);
    		}
    		else if(response=="2"){
    			Materialize.toast(toastrekt, 5000);
    		}
    	}
	})

});
});