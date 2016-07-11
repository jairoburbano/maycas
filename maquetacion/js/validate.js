(function($) {
    function validateContacto() {
        $('<div class="message"><div class="message__content"><div class="message__container"></div><button class="btn btn--border js-light">Aceptar</button></div>').hide().appendTo('.contacto__container');
        $.validator.addMethod("valueNotEquals", function(value, element, arg){
            return arg != value;
        }, "Value must not equal arg.");
        $('.contacto__form').each(function() {
            $(this).validate({
                onkeyup: function (element, event) {
                    if (event.which === 9 && this.elementValue(element) === "") {
                        return;
                    } else {
                        this.element(element);
                    }
                },
                onfocusin: function (element, event) {
                    if (event.which === 9 && this.elementValue(element) === "") {
                        return;
                    } else {
                        this.element(element);
                    }
                },
                rules: {
                    name: "required",
                    country: {
                        valueNotEquals: "default"
                    },
                    mail: {
                        required: true,
                        email: true
                    },
                    message: {
                        required:true,
                        minlength:8
                    },
                },
                messages: {
                    name: {
                        required: "Usa solo letras"
                    },
                    country: {
                        valueNotEquals: "Debes elegir una"
                    },
                    mail: {
                        required: "Ingresa un Email válido",
                        email: "Ingresa un Email válido"
                    },
                    message: {
                        required: "Ingresar un mensaje/consulta",
                        minlength: "Ingresa al menos 8 caracteres."
                    }
                },
                errorElement: 'p',
                errorClass: 'error',
                validClass: 'form-valid',
                highlight: function (element, errorClass, validClass) {
                    $(element).parents('.input-group').addClass(errorClass).removeClass(validClass);
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).parents('.input-group').removeClass(errorClass).addClass(validClass);
                },
                submitHandler: function (form) {
                    $('.contacto__container .loading').css({opacity: 0}).animate({opacity: 1});
                    $.post($('.contacto__form').attr('action'), $('.contacto__form').serialize(), function (data) {
                        var obj = $.parseJSON(data);
                        $('.contacto__container .loading').fadeOut();
                        if (obj.exito === 'exito') {
                            $('.message__container').prepend('<h1>Gracias por contactarnos</h1><p>Mensaje enviado con exito</p>');
                            $('.message').fadeIn();
                            $('.contacto__form').find('.form__valid').removeClass('form__valid');
                            $('.contacto__form')[0].reset();
                        } else {
                            $('.contacto__container .message').html('<p class="warning-msg">' + obj.mensaje + '</p>').removeClass('hidden');
                        }
                    });
                    return false;
                }
            });
        });
    }
    function validatePreguntas() {
        $('<div class="message"><div class="message__content"><div class="message__container"></div><button class="btn btn--border js-light">Aceptar</button></div>').hide().appendTo('.pregunta--container .send-group');
        $.validator.addMethod("valueNotEquals", function(value, element, arg){
            return arg != value;
        }, "Value must not equal arg.");
        $('.pregunta--form').each(function() {
            $(this).validate({
                onkeyup: function (element, event) {
                    if (event.which === 9 && this.elementValue(element) === "") {
                        return;
                    } else {
                        this.element(element);
                    }
                },
                onfocusin: function (element, event) {
                    if (event.which === 9 && this.elementValue(element) === "") {
                        return;
                    } else {
                        this.element(element);
                    }
                },
                rules: {
                    name: "required",
                    lastname: "required",
                    message: {
                        required:true,
                        minlength:8
                    },
                    usermail: {
                        required: true,
                        email: true
                    },
                },
                messages: {
                    name: {
                        required: "Ingresa tu nombre"
                    },
                    lastname: {
                        required: "Ingresa tu apellido"
                    },
                    usermail: {
                        required: "Ingresa un Email válido",
                        email: "Ingresa un Email válido"
                    },
                    message: {
                        required: "Ingresar un mensaje/consulta",
                        minlength: "Ingresa al menos 8 caracteres."
                    }
                },
                errorElement: 'p',
                errorClass: 'error',
                validClass: 'form-valid',
                highlight: function (element, errorClass, validClass) {
                    $(element).parents('.input-group').addClass(errorClass).removeClass(validClass);
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).parents('.input-group').removeClass(errorClass).addClass(validClass);
                },
                submitHandler: function (form) {
                    $('.pregunta--container .loading').css({opacity: 0}).animate({opacity: 1});
                    $.post($('.pregunta--form').attr('action'), $('.pregunta--form').serialize(), function (data) {
                        var obj = $.parseJSON(data);
                        $('.pregunta--container .loading').fadeOut();
                        if (obj.exito === 'exito') {
                            $('.message__container').prepend('<h1>Gracias por contactarnos</h1><p>Mensaje enviado con exito</p>');
                            $('.message').fadeIn();
                            $('.pregunta--form').find('.form__valid').removeClass('form__valid');
                            $('.pregunta--form')[0].reset();
                        } else {
                            $('.pregunta--container .message').html('<p class="warning-msg">' + obj.mensaje + '</p>').removeClass('hidden');
                        }
                    });
                    return false;
                }
            });
        });
    }
    validateContacto();
    validatePreguntas();
})(jQuery);