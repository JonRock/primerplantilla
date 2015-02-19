var FormValidation = function () {

    // basic validation
    var validacionFormularioNoricias = function() {
        // for more info visit the official plugin documentation:
        // http://docs.jquery.com/Plugins/Validation

        var form1 = $('#formulario_nueva_noticia');
        var error1 = $('.alert-danger', form1);
        var success1 = $('.alert-success', form1);

        form1.validate({
            errorElement: 'span', //default input error message container
            errorClass: 'help-block help-block-error', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            ignore: "",  // validate all fields including form hidden input
            rules: {
                titulo: {
                    minlength: 5,
                    required: true
                },
                contenido: {
                    minlength: 10,
                    required: true
                },
                fecha: {
                    required: true
                }
            },
            messages: {
                titulo: {
                    minlength: "Escribe minimo 5 caracteres",
                    required: "El titulo es obligatorio"
                },
                contenido: {
                    minlength: "Escribe un contenido minimo de 10 caracteres",
                    required: "El contenido es obligatorio"
                },
                fecha: {
                    required: "La fecha es obligaoria"
                }
            },

            invalidHandler: function (event, validator) { //display error alert on form submit
                success1.hide();
                error1.show();
                Metronic.scrollTo(error1, -200);
            },

            highlight: function (element) { // hightlight error inputs
                $(element)
                    .closest('.form-group').addClass('has-error'); // set error class to the control group
            },

            unhighlight: function (element) { // revert the change done by hightlight
                $(element)
                    .closest('.form-group').removeClass('has-error'); // set error class to the control group
            },

            submitHandler: function (form) {
                $.ajax({
                    url: $('#formulario_nueva_noticia').attr('action'),
                    type: 'post',
                    cache: false,
                    dataType: 'json',
                    data: $('#formulario_nueva_noticia').serialize(),
                    beforeSend: function(){
                        alert("Se estan enviando los datos");
                    },
                    error: function(jqXHR, status, error){
                        alert("Hubo un error"+error);
                    },
                    success: function(respuesta){
                        if(respuesta.exito){
                            alert(respuesta.mensaje);
                            parent.location.reload();
                        }
                    }
                });
            }
        });
    }


    return {
        //main function to initiate the module
        init: function () {

            validacionFormularioNoricias();

        }

    };

}();