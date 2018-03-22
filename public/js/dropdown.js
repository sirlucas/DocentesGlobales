function hola(campo){
  console.log(campo);

  $('#popup').modal('show')
  return true;
}
function validaRut(campo){
	if ( campo.length == 0 ){ return false; }
	if ( campo.length < 8 ){ return false; }

	campo = campo.replace('-','')
	campo = campo.replace(/\./g,'')

	var suma = 0;
	var caracteres = "1234567890kK";
	var contador = 0;
	for (var i=0; i < campo.length; i++){
		u = campo.substring(i, i + 1);
		if (caracteres.indexOf(u) != -1)
		contador ++;
	}
	if ( contador==0 ) { return false }

	var rut = campo.substring(0,campo.length-1)
	var drut = campo.substring( campo.length-1 )
	var dvr = '0';
	var mul = 2;

	for (i= rut.length -1 ; i >= 0; i--) {
		suma = suma + rut.charAt(i) * mul
                if (mul == 7) 	mul = 2
		        else	mul++
	}
	res = suma % 11
	if (res==1)		dvr = 'k'
                else if (res==0) dvr = '0'
	else {
		dvi = 11-res
		dvr = dvi + ""
	}
	if ( dvr != drut.toLowerCase() ) { return false; }
	else { return true; }
}


function generatepdf(e){
  $.ajax({
        url   :  '/generatepdf',
        type  : 'get',
        data  : e,

        success : function(data) {

          console.log("success"); // another sanity check
        },

        // handle a non-successful response
        error : function(request, type, errorThrown) {
          console.log(error);
        }
    });
}

function adjustIframeHeight() {
      var $body   = $('body'),
          $iframe = $body.data('iframe.fv');
      if ($iframe) {
          // Adjust the height of iframe
          $iframe.height($body.height());
      }
  }


$(document).ready(function(){


  //validadores personalizados
  $.validator.addMethod("letrasNombre", function(value, element) {
        return /^[ A-Za-zäÄëËïÏöÖüÜáéíóúáéíóúÁÉÍÓÚÂÊÎÔÛâêîôûàèìòùÀÈÌÒÙ'.-]*$/i.test(value);
    }, "Ingrese sólo caracteres y espacios");


  $.validator.addMethod("rutChile", function(value, element) {
        return /^\d{8}[\-][0-9kK]{1}$/i.test(value);
    }, "Ingrese un rut válido y sin puntos, ej.: 02345678-k");

  jQuery.validator.addMethod("rutval", function(value, element) {
        return this.optional(element) || validaRut(value);
  }, "Ingrese un rut válido y sin puntos, ej.: 02345678-k");


  $("#form1").validate({
    ignore: '.select2-input, .select2-focusser',
    rules: {
        rut:{
          rutChile:true,
          required: true,
          rutval:true,
        },
        nombre: {
          required: true,
          letrasNombre: true,
          maxlength: 50,
          minlength: 3,
        },
        email: {
          required: true,
          email: true
        },
        telefono: {
          required: false,
          maxlength: 11,
          minlength: 6,
          digits:true,
        },
        unidad:{
          required: true,
        },
        sede:{
          required: true,
        },
        cargo:{
          required: true,
        },
        carreras:{
          required: true,
        },
        postitulo:{
          required: true,
          maxlength: 50,
          minlength: 5,
        },
        inst_anf:{
          required: true,
          maxlength: 100,
          minlength: 3,
        },
        website:{
          required: false,
          maxlength: 100,
          url: true,
        },
        pais:{
          required: true,
        },
        cities:{
          required: true,
        },
        inst_descripcion:{
          maxlength: 200,
        },
        fechaida:{
          required: true,
        },
        fecharetorno:{
          required:true
        },
        actividad:{
          required: true,
        },
        plantrabajo:{
          required: true,
        },
        clasis:{
          required: true,
        },
        inst_descripcion:{
          required: false,
          maxlength: 150,
        },
        proposito:{
          required: false,
          maxlength: 200,
        },
        contacto_anf: {
          required: false,
          letrasNombre: true,
          maxlength: 50,
          minlength: 3,
        },
        cargo_anf: {
          required: false,
          maxlength: 50
        },
        fono_anf: {
          required: false,
          maxlength: 11,
          minlength: 6,
          digits:true,
        },
        observaciones:{
          maxlength: 200,
        },
        colaboracion:{
          maxlength: 200,
        },
    },
    messages:{
        nombre:{
          required: "El Nombre del académico es obligatorio",
          minlength: "El nombre debe tener al menos 3 caracteres",
          maxlength: "El nombe debe tener menos de 50 caracteres"
        },
        rut:{
          required: "El rut es obligatorio",
        },
        email: {
            required: "Campo email es obligatorio",
            email: "Ingrese email con formato email@ejemplo.cl"
        },
        telefono: {
            maxlength: "Ingrese no más de 11 digitos",
            minlength: "Ingrese minimo 6 digitos",
            digits: "Ingrese sólo números",
        },
        unidad:{
          required: "Seleccione una opción",
        },
        sede:{
          required: "Seleccione una opción",
        },
        cargo:{
          required: "Seleccione una opción",
        },
        carreras:{
          required: "Seleccione una opción",
        },
        postitulo:{
          required: "Ingrese el nombre de su postitulo",
          maxlength: "Ingrese no más de 50 caracteres",
          minlength: "Ingrese mínimo 5 caracteres",
        },
        inst_anf:{
          required: "Ingrese el Nombre de la Institución anfitriona",
          maxlength: "Ingrese no más de 100 caracteres",
          minlength: "Ingrese mínimo 3 caracteres",
        },
        website:{
          url: "Ingrese un URL válida, ej.: 'https://www.ejemplo.cl'",
          maxlength: "la URL no debe tener más de 100 caracteres"
        },
        pais:{
            required: "Seleccione una país",
        },
        cities:{
            required: "Seleccione una ciudad",
        },
        inst_descripcion:{
          maxlength: "Descripción no debe tener más de 150 caracteres"
        },
        fechaida:{
          required: "Fecha es obligatorio"
        },
        fecharetorno:{
          required: "Fecha es obligatorio"
        },
        actividad:{
          required: "seleccione una opción",
        },
        plantrabajo:{
          required: "seleccione una opción",
        },
        clasis:{
          required: "seleccione una opción",
        },
        proposito:{
          maxlength: "Proposito no debe tener más de 150 caracteres",
        },
        contacto_anf: {
          minlength: "El nombre debe tener al menos 3 caracteres",
          maxlength: "El nombe debe tener menos de 50 caracteres",
        },
        cargo_anf: {
          maxlength: "El cargo no debe tener más de 50 caracteres",
        },
        fono_anf: {
          maxlength: "Ingrese no más de 11 digitos",
          minlength: "Ingrese minimo 6 digitos",
          digits: "Ingrese sólo números",
        },
        observaciones:{
          maxlength: "El nombe debe tener menos de 50 caracteres",
        },
        colaboracion:{
          maxlength: "El nombe debe tener menos de 50 caracteres",
        },
    },
    errorElement: "em",
    errorPlacement: function ( error, element ) {
					// Add the `help-block` class to the error element
					error.addClass( "help-block" );

					if ( element.prop( "type" ) === "checkbox" ) {
						error.insertAfter( element.parent( "label" ) );
					} else {
						error.insertAfter( element );
					}
	  },
    highlight: function ( element, errorClass, validClass ) {
				$( element ).parents( ".form-group" ).addClass( "has-error" ).removeClass( "has-success" );
		},
		unhighlight: function (element, errorClass, validClass) {
			$( element ).parents( ".form-group" ).addClass( "has-success" ).removeClass( "has-error" );
  	}

  });


  $("#form-content").steps({
    headerTag: "h5",
    bodyTag: "section",
    transitionEffect: "slideLeft",
    autoFocus: true,
    enableCancelButton: false,
    labels: {
     cancel: "Cancelar",
     current: "etapa actual:",
     pagination: "Paginación",
     finish: "Terminar",
     next: "Siguiente",
     previous: "Atras",
     loading: "Cargando..."
    },
    onCanceled: function (event) { },
    onStepChanged: function(e, currentIndex, priorIndex) {
      // You don't need to care about it
      // It is for the specific demo
      adjustIframeHeight();
    },
    // Triggered when clicking the Previous/Next buttons
    onStepChanging: function(e, currentIndex, newIndex) {
      if (currentIndex > newIndex){
        return true;
      }
      var form = $("#form1");
      if (currentIndex < newIndex){
        // To remove error styles
        $(".body:eq(" + newIndex + ") label.error", form).remove();
        $(".body:eq(" + newIndex + ") .error", form).removeClass("error");
      }

      // Disable validation on fields that are disabled or hidden.
      form.validate().settings.ignore = ":disabled,:hidden";
    //  form.validate().settings.ignore = '.select2-input, .select2-focusser',

      // Start validation; Prevent going forward if false
      return form.valid();
    },
    // Triggered when clicking the Finish button
    onFinishing: function(e, currentIndex) {
      var form = $("#form1");
      form.submit();
      return true
    },
    // Triggered whe clicking the Finish button
    onFinished: function(e, currentIndex) {
    }
  });//fin steps


  $('.select2').select2().on('change', function() {
  $(this).trigger('blur');});

  $(".datepicker").datepicker({
          changeMonth: true,
          changeYear: true,
          yearRange: "2018:2025",
          format: "yyyy-mm-dd",
          minDate: 0,
          defaultDate: null,
          autoclose: true,
      }).on('change', function() {
          $(this).valid();
      });
    //$('.phone').inputmask('(+99) 9999-9999', {numericInput: true });    //123456  =>  € ___.__1.234,56

    $('div.alert').delay(3000).fadeOut(350);



// select anidado para ciuades y paises
  $(document).on('change','#countries',function(){
    var country_id=$(this).val();
    var div=$(this).parent();
    var op=" ";

    $.ajax({
      type:'get',
      url:'/formin/getCities',
      data:{'id':country_id},
      dataType: 'json',
      success:function(data){
        console.log(data);
        $('#cities').empty();
        op+='<option value="0" selected disabled>Seleccione una ciudad</option>';
        for(var i=0;i<data.length;i++){
          op+='<option value="'+data[i].id+'">'+data[i].ciudad+'</option>';
        }
        $("#cities").append(op);

      },
      error:function(){
      }
    });
  });

//muestra input para nombre del plan de estudio.
  $("#carreras").change(function(e) {
    var carrera_id=$(this).val();
    var div=$(this).parent();

    if (carrera_id == '31' || carrera_id == '32' || carrera_id == '33' || carrera_id == '34' || carrera_id == '35') {
      $("#postitulo").removeClass("hidden");
    }
    else {
      $("#postitulo").addClass("hidden");
      $('#postin').removeAttr("required");
    }
   });



});//fin doc ready
