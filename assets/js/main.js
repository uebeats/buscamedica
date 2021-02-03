/**
 * Template Name: Buscamedica V1
 * Author: madein.codes
 */
!(function ($) {
    "use strict";

    // Preloader
    $(window).on('load', function () {
        if ($('#preloader').length) {
            $('#preloader').delay(100).fadeOut('slow', function () {
                $(this).remove();
            });
        }
    });

    // Smooth scroll for the navigation menu and links with .scrollto classes
    var scrolltoOffset = $('#header').outerHeight() - 1;
    $(document).on('click', '.nav-menu a, .mobile-nav a, .scrollto', function (e) {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            if (target.length) {
                e.preventDefault();

                var scrollto = target.offset().top - scrolltoOffset;

                if ($(this).attr("href") == '#header') {
                    scrollto = 0;
                }

                $('html, body').animate({
                    scrollTop: scrollto
                }, 1500, 'easeInOutExpo');

                if ($(this).parents('.nav-menu, .mobile-nav').length) {
                    $('.nav-menu .active, .mobile-nav .active').removeClass('active');
                    $(this).closest('li').addClass('active');
                }

                if ($('body').hasClass('mobile-nav-active')) {
                    $('body').removeClass('mobile-nav-active');
                    $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
                    $('.mobile-nav-overly').fadeOut();
                }
                return false;
            }
        }
    });

    // Activate smooth scroll on page load with hash links in the url
    $(document).ready(function () {
        if (window.location.hash) {
            var initial_nav = window.location.hash;
            if ($(initial_nav).length) {
                var scrollto = $(initial_nav).offset().top - scrolltoOffset;
                $('html, body').animate({
                    scrollTop: scrollto
                }, 1500, 'easeInOutExpo');
            }
        }
    });

    // Navigation active state on scroll
    var nav_sections = $('section');
    var main_nav = $('.nav-menu, .mobile-nav');

    $(window).on('scroll', function () {
        var cur_pos = $(this).scrollTop() + 200;

        nav_sections.each(function () {
            var top = $(this).offset().top,
                bottom = top + $(this).outerHeight();

            if (cur_pos >= top && cur_pos <= bottom) {
                if (cur_pos <= bottom) {
                    main_nav.find('li').removeClass('active');
                }
                main_nav.find('a[href="#' + $(this).attr('id') + '"]').parent('li').addClass('active');
            }
            if (cur_pos < 300) {
                $(".nav-menu ul:first li:first, .mobile-nav ul:first li:first").addClass('active');
            }
        });
    });

    // Mobile Navigation
    if ($('.nav-menu').length) {
        var $mobile_nav = $('.nav-menu').clone().prop({
            class: 'mobile-nav d-lg-none'
        });
        $('body').append($mobile_nav);
        $('body').prepend('<button type="button" class="mobile-nav-toggle d-lg-none"><i class="icofont-navigation-menu"></i></button>');
        $('body').append('<div class="mobile-nav-overly"></div>');

        $(document).on('click', '.mobile-nav-toggle', function (e) {
            $('body').toggleClass('mobile-nav-active');
            $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
            $('.mobile-nav-overly').toggle();
        });

        $(document).on('click', '.mobile-nav .drop-down > a', function (e) {
            e.preventDefault();
            $(this).next().slideToggle(300);
            $(this).parent().toggleClass('active');
        });

        $(document).click(function (e) {
            var container = $(".mobile-nav, .mobile-nav-toggle");
            if (!container.is(e.target) && container.has(e.target).length === 0) {
                if ($('body').hasClass('mobile-nav-active')) {
                    $('body').removeClass('mobile-nav-active');
                    $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
                    $('.mobile-nav-overly').fadeOut();
                }
            }
        });
    } else if ($(".mobile-nav, .mobile-nav-toggle").length) {
        $(".mobile-nav, .mobile-nav-toggle").hide().prop('required', false);
    }
    // Toggle .header-scrolled class to #header when page is scrolled
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('#header').addClass('header-scrolled');
            $('#topbar').addClass('topbar-scrolled');
        } else {
            $('#header').removeClass('header-scrolled');
            $('#topbar').removeClass('topbar-scrolled');
        }
    });

    if ($(window).scrollTop() > 100) {
        $('#header').addClass('header-scrolled');
        $('#topbar').addClass('topbar-scrolled');
    }
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });

    $('.back-to-top').click(function () {
        $('html, body').animate({
            scrollTop: 0
        }, 1500, 'easeInOutExpo');
        return false;
    });

    // Testimonials carousel (uses the Owl Carousel library)
    $(".testimonials-carousel").owlCarousel({
        autoplay: true,
        dots: true,
        loop: true,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 1
            },
            900: {
                items: 2
            }
        }
    });

    // Initiate the datepicker plugin
    $(document).ready(function () {
        $('.datepicker').datepicker({
            autoclose: true,
            language: 'es',
            format: 'dd/mm/yyyy',
            startDate: 'tomorrow'
        });
    });

})(jQuery);

(function ($) {
    $(".slider").owlCarousel({
        loop: true,
        autoplay: true,
        margin: 10,
        autoplayTimeout: 2000, //2000ms = 2s;
        autoplayHoverPause: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 2,
                nav: false
            },
            1000: {
                items: 3,
                nav: true,
                loop: false,
                margin: 10
            }
        }
    });
})(jQuery);


$(document).ready(function () {
    /** Init SELECT2 Theme Boostrap 4.5 */
    $('select').select2({

        language: {
            noResults: function () {
                return "No hay opciones disponibles";
            },
            searching: function () {
                return "Buscando..";
            }
        },
        theme: "bootstrap",
        placeholder: "Elige una opción",
        width: '100%'
    });

    /** Formateo a RUT CHILENO */
    $('input#rutUser').rut();
    $('input#rutUserE').rut();
    $('input#rutUserV').rut();
    $('input#rutUserH').rut();
});

/**
 * Ajax Formulario
 */

$(document).ready(function () {
    /**
     * Mostrar registros DB Consulta
     */
    $("#prevSaludC").change(function () {
        $("#prevSaludC option:selected").each(function () {
            idprev = $(this).val();
            idtipos = $('#idTipoC').val();
            $.post("php/ajax/getEspecialidadesC.php", { idprev: idprev, idtipos: idtipos }, function (data) {
                $("#espeMedicaC").html(data);
            });
        });
    })

    $("#espeMedicaC").change(function () {
        $("#espeMedicaC option:selected").each(function () {
            idprev = $('#prevSaludC').val();
            idespe = $(this).val();

            $.post("php/ajax/getComunasC.php", { idespe: idespe, idprev: idprev }, function (data) {
                $("#comunasC").html(data);
            });
        });
    })

    $("#comunasC").change(function () {
        $("#comunasC option:selected").each(function () {
            idprev = $('#prevSaludC').val();
            idespe = $('#espeMedicaC').val();
            idcomuna = $(this).val();
            // console.log(idespe + ' - ' + idprev + ' - ' + idcomuna);
            $.post("php/ajax/getCentroMedicoC.php", { idespe: idespe, idprev: idprev, idcomuna: idcomuna }, function (data) {
                $("#centroMedicoC").html(data);
            });
        });
    })

    $("#centroMedicoC").change(function () {
        $("#centroMedicoC option:selected").each(function () {
            idprev = $('#prevSaludC').val();
            idespe = $('#espeMedicaC').val();
            idcentro = $(this).val();
            $.post("php/ajax/getMedicosC.php", { idespe: idespe, idprev: idprev, idcentro: idcentro }, function (data) {
                $("#medicoC").html(data);
            });
        });
    })

    /**
     * Mostrar registros DB Examen
     */
    $("#prevSaludE").change(function () {
        $("#prevSaludE option:selected").each(function () {
            idprev = $(this).val();
            idtipos = $('#idTipoE').val();
            //console.log(idprev + idtipos);
            $.post("php/ajax/getExamenes.php", { idprev: idprev, idtipos: idtipos }, function (data) {
                $("#tipoExamenE").html(data);
            });
        });
    })

    $("#tipoExamenE").change(function () {
        $("#tipoExamenE option:selected").each(function () {
            idexamen = $(this).val();
            idprev = $('#prevSaludE').val();
            $.post("php/ajax/getComunasE.php", { idexamen: idexamen, idprev: idprev }, function (data) {
                $("#comunasE").html(data);
            });
        });
    })

    $("#comunasE").change(function () {
        $("#comunasE option:selected").each(function () {
            idprev = $('#prevSaludE').val();
            idexamen = $('#tipoExamenE').val();
            $.post("php/ajax/getCentroMedicoE.php", { idexamen: idexamen, idprev: idprev }, function (data) {
                $("#centroMedicoE").html(data);
            });
        });
    })

    $("#centroMedicoE").change(function () {
        $("#centroMedicoE option:selected").each(function () {
            idprev = $('#prevSaludE').val();
            idexamen = $('#tipoExamenE').val();
            idcentro = $(this).val();
            $.post("php/ajax/getMedicosE.php", { idexamen: idexamen, idprev: idprev, idcentro: idcentro }, function (data) {
                $("#medicosE").html(data);
            });
        });
    })

    /**
     * Mostrar registros DB VideoConsulta
     */
    $("#prevSaludV").change(function () {
        $("#prevSaludV option:selected").each(function () {
            idprev = $(this).val();
            idtipos = $('#idTipoV').val();
            $.post("php/ajax/getEspecialidadesV.php", { idprev: idprev, idtipos: idtipos }, function (data) {
                $("#espeMedicaV").html(data);
            });
        });
    })

    /**
     * Insertar registros DB Consulta
     */
    $("#formConsulta").submit(function (e) {
        e.preventDefault();
        var datos = $(this).serialize();
        //console.log(datos);
        $.ajax({
            type: "POST",
            url: "php/addDemo.php",
            data: datos,
            success: function (data) {
                if (data == 'ok') {
                    Swal.fire({
                        icon: 'success',
                        title: 'Solicitud Exitosa',
                        text: 'Su reserva de hora ha sido solicitada satisfactoriamente. Una copia de esta solicitud fue enviada a tu correo electrónico.',
                        footer: '<a href="mailto:soporte@buscamedica.cl">Si necesitas ayuda comunicate con Soporte</a>'
                    })
                    $('#formConsulta')[0].reset();
                    $('#consulta').modal('hide');
                    // console.log('Exitazooooooo');
                } else if (data == 'vacio') {
                    swal({
                        title: "Algo salio mal!",
                        text: "Un campo esta vacio, recuerda registrar todos los datos.",
                        icon: "error",
                        button: "Cerrar",
                    });
                    $('#formConsulta')[0].reset();
                    $('#consulta').modal('hide');
                } else {
                    console.log(data);
                }
            }
        });
    })

    $("#formExamen").submit(function (e) {
        e.preventDefault();
        var datos = $(this).serialize();
        $.ajax({
            type: "POST",
            url: "php/addDemo.php",
            data: datos,
            success: function (data) {
                if (data == 'ok') {
                    Swal.fire({
                        icon: 'success',
                        title: 'Solicitud Exitosa',
                        text: 'Su reserva de hora ha sido solicitada satisfactoriamente. Una copia de esta solicitud fue enviada a tu correo electrónico.',
                        footer: '<a href="mailto:soporte@buscamedica.cl">Si necesitas ayuda comunicate con Soporte</a>'
                    })
                    $('#formExamen')[0].reset();
                    $('#examen').modal('hide');
                } else if (data == 'vacio') {
                    Swal.fire({
                        icon: 'error',
                        title: 'Algo salio mal!',
                        text: 'La solicitud de hora fue rechazada, revisa los datos ingresados o reintenta más tarde.',
                        footer: '<a href="mailto:soporte@buscamedica.cl">Si necesitas ayuda comunicate con Soporte</a>'
                    })
                    $('#examen').modal('hide');
                } else {
                    console.log(data);
                }
            }
        });
    })

    $("#formVideo").submit(function (e) {
        e.preventDefault();
        var datos = $(this).serialize();
        $.ajax({
            type: "POST",
            url: "php/addDemo.php",
            data: datos,
            success: function (data) {
                if (data == 'ok') {
                    Swal.fire({
                        icon: 'success',
                        title: 'Solicitud Exitosa',
                        text: 'Su reserva de hora ha sido solicitada satisfactoriamente. Una copia de esta solicitud fue enviada a tu correo electrónico.',
                        footer: '<a href="mailto:soporte@buscamedica.cl">Si necesitas ayuda comunicate con Soporte</a>'
                    })
                    $('#formVideo')[0].reset();
                    $('#videoconsulta').modal('hide');
                } else if (data == 'vacio') {
                    Swal.fire({
                        icon: 'error',
                        title: 'Algo salio mal!',
                        text: 'La solicitud de hora fue rechazada, revisa los datos ingresados o reintenta más tarde.',
                        footer: '<a href="mailto:soporte@buscamedica.cl">Si necesitas ayuda comunicate con Soporte</a>'
                    })
                    $('#videoconsulta').modal('hide');
                } else {
                    console.log(data);
                }
            }
        });
    })

    $("#formHigienizacion").submit(function (e) {
        e.preventDefault();
        var datos = $(this).serialize();
        $.ajax({
            type: "POST",
            url: "php/addDemo.php",
            data: datos,
            success: function (data) {
                if (data == 'ok') {
                    Swal.fire({
                        icon: 'success',
                        title: 'Solicitud Exitosa',
                        text: 'Su reserva de hora ha sido solicitada satisfactoriamente. Una copia de esta solicitud fue enviada a tu correo electrónico.',
                        footer: '<a href="mailto:soporte@buscamedica.cl">Si necesitas ayuda comunicate con Soporte</a>'
                    })
                    $('#formHigienizacion')[0].reset();
                    $('#higienizacion').modal('hide');
                } else if (data == 'vacio') {
                    Swal.fire({
                        icon: 'error',
                        title: 'Algo salio mal!',
                        text: 'La solicitud de hora fue rechazada, revisa los datos ingresados o reintenta más tarde.',
                        footer: '<a href="mailto:soporte@buscamedica.cl">Si necesitas ayuda comunicate con Soporte</a>'
                    })
                    $('#higienizacion').modal('hide');
                } else {
                    console.log(data);
                }
            }
        });
    })
});