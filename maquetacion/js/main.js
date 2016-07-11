(function($) {
    // Tamaño de la pantalla
    var $window = $(window),
        windowSize	= $window.width(),
        windowHeight	= $window.height();
    function headerFixed() {
        var header = $('.header'),
            scroll = $(window).scrollTop();
        if (scroll >= 60) {
            header.addClass('menu--fixed');
        } else {
            header.removeClass("menu--fixed");
        }
    }
    function menuMobile() {
        var buttton = $('.icon--mobile'),
            menu = $('.menu--bottom'),
            page = $('body, html');
        if(windowSize < 940) {
            buttton.click( function() {
                menu.stop().slideToggle();
                $(this).toggleClass('open--menu');
            });
        }
    }
    function indexDesktop() {
        var index = $('.index'),
            alto = windowHeight - 84;
        if(windowSize > 980) {
            index.css('height', alto);
        }
    }
    function preguntas() {
        var group = $('.input-group'),
            input = $('.input-group input, .input-group textarea');
        input.focus(function() {
            $(this).parents('.input-group').addClass('active');
        });
        input.blur(function() {
            if( !$(this).val() ) {
                $(this).parents('.input-group').removeClass('active');
            }
        });
    }
    function sliderVino() {
        var slider = $('.js-slide');
        if(windowSize < 740) {
            slider.each(function() {
                var $this   = $(this);
                $this.flexslider({
                    animation: 'slide',
                    controlNav: false,
                    prevText: '<svg><use xlink:href="#shape-flex-prev" /></svg>',
                    nextText: '<svg><use xlink:href="#shape-flex-next" /></svg>'
                });
            });
        }
    }
    function gallery() {
        var slider = $('.js-gallery'),
            direction = $('.caracteristica .flex-direction-nav li');
        slider.each(function() {
            var $this   = $(this);
            $this.flexslider({
                animation: 'slide',
                prevText: '<svg><use xlink:href="#shape-flex-prev" /></svg>',
                nextText: '<svg><use xlink:href="#shape-flex-next" /></svg>'
            });
        });
        if(windowSize > 980) {
            var group = $('.caracteristica'),
                controlNav = $('.flex-control-nav'),
                item = $('.flex-control-nav li').outerWidth(true);
            group.each(function() {
                var counter = $(this).find('.flex-control-nav li').length,
                    controlWidth = item * counter;
                $(this).find('.flex-control-nav').width(controlWidth);
                var controls = $(this).find('.flex-control-nav').outerWidth(true);
                console.log(controls);
                $(this).find('.flex-direction-nav li').css({
                    marginLeft : controls
                });
            });
        }
    }
    function menuFixedVinos() {
        var container = $('.page--container');
        if(container.length) {
            if(windowSize > 740 && windowSize < 980) {
                var containerTop = container.offset().top - 65,
                    altura = $(window).scrollTop(),
                    menu = $('.inside-menu');
                if(altura > containerTop) {
                    menu.css({
                        'position' : 'fixed',
                        'top' : 65
                    })
                } else {
                    menu.css({
                        'position' : 'absolute',
                        'top' : 0
                    })
                }
            } else if(windowSize > 980) {
                var containerTop = container.offset().top - 48,
                    altura = $(window).scrollTop(),
                    menu = $('.inside-menu');
                if(altura > containerTop) {
                    menu.css({
                        'position' : 'fixed',
                        'top' : 48
                    })
                } else {
                    menu.css({
                        'position' : 'absolute',
                        'top' : 0
                    })
                }
            } 
        }
        if($('.inside-menu').length > 0) {
            var altura = $(window).scrollTop() + $(window).height(),
                //Secciones para calcular altural
                iconos = $('#vinos-iconos').offset().top + $(window).height() / 2,
                reserva = $('#reserva-especial').offset().top + $(window).height() / 2,
                sumaq = $('#sumaq').offset().top + $(window).height() / 2,
                //Menus para active
                miconos = $('.m-one'),
                mreserva = $('.m-two'),
                msumaq = $('.m-three');

            if(altura > iconos && altura < reserva){
                miconos.addClass('active');
            }else {
                miconos.removeClass('active');
            }
            if(altura > reserva && altura < sumaq){
                mreserva.addClass('active');
            }else {
                mreserva.removeClass('active');
            }
            if(altura > sumaq){
                msumaq.addClass('active');
            }else {
                msumaq.removeClass('active');
            }
        }
    }
    function wrapDescription() {
        var container = $('.single__descripcion'),
            item = $('.descripcion__item');
        if(windowSize > 980) {
            $.fn.wrapMatch = function(count, className) {
                var length = this.length;
                for(var i = 0; i < length ; i+=count) {
                    this.slice(i, i+count).wrapAll('<div '+((typeof className == 'string')?'class="'+className+'"':'')+'/>');
                }
                return this;
            }; 
            $('.descripcion__item').wrapMatch(2,'column');
        }
    }
    function smoothScroll() {
        $('a[href^="#"]').on('click',function (e) {
            e.preventDefault();
            var target = this.hash;
            var $target = $(target);
            $('html, body').stop().animate({
                'scrollTop': $target.offset().top - 65
            }, 900, 'swing', function () {
                window.location.hash = target -65;
            });
        });
    }
    function lightboxValles() {
        var item = $('.vinedo__icon'),
            close = $('.vinedo__close');
        if(windowSize > 740) {
            item.click(function() {
                var $this = $(this);
                if($this.parent().hasClass('js-item')) {
                    $this.parent().toggleClass('open');
                    $this.parent().removeClass('js-item');
                    $this.parent().find('.vinedo__lightbox').fadeToggle();
                    $this.parent().find('.vinedo__close').fadeToggle();
                    $this.parent().siblings().removeClass('open');
                    $this.parent().siblings().addClass('js-item');
                    $this.parent().siblings().find('.vinedo__lightbox').fadeOut();
                    $this.parent().siblings().find('.vinedo__close').fadeOut();
                    if($('html').hasClass('no-touch')) {
                        $('.vinedo__container').on({
                            mouseleave: function(e) {
                                close.offset({
                                    left: 0,
                                    top: 0,
                                });
                            },
                            mousemove : function(e) {
                                close.offset({
                                    left: e.pageX - 20,
                                    top: e.pageY - 15
                                });
                            }

                        });
                        //                        $('.vinedo__container').hover(function() {
                        //                            $(document).mousemove(function(e) {
                        //                                close.offset({
                        //                                    left: e.pageX - 20,
                        //                                    top: e.pageY - 15
                        //                                });
                        //                            });
                        //                        });
                    }
                }
            });
            close.click(function() {
                var $this = $(this);
                $this.fadeOut();
                $this.parents('.vinedo__item').find('.vinedo__lightbox').fadeOut();
                $this.parents('.vinedo__item').removeClass('open');
                $this.parents('.vinedo__item').addClass('js-item');
            });
        }
    }
    function exito() {
        var box = $('.message'),
            button = $('.js-light');
        button.click(function() {
            box.fadeOut(function() {
                $('.message__container').empty();
            });
        });
    }
    function popupLinks(){
        var $trigger = $('.popup');
        $trigger.on('click', function() {
            var width  = 575,
                height = 400,
                left   = ($window.width()  - width)  / 2,
                top    = ($window.height() - height) / 2,

                opts   = 'status=1' +
                ',width='  + width  +
                ',height=' + height +
                ',top='    + top    +
                ',left='   + left;

            window.open(this.href,'compartir', opts);
        });
    }
    function banner() {
        var banner = $('.banner__image');
        banner.css('max-height', windowHeight - 84);
    }
    function loader() {
        var loadind = $('.loader');
        loadind.fadeIn(300).delay(500).fadeOut("slow");
    }
    menuMobile();
    indexDesktop();
    preguntas();
    sliderVino();
    menuFixedVinos();
    wrapDescription();
    smoothScroll();
    lightboxValles();
    gallery();
    exito();
    popupLinks();
    banner();
    $(window).scroll(function() {
        menuFixedVinos();
        headerFixed();
    });
    $(window).load(function() {
        loader();
    });
    window.onload = function() {
        // Video
        if($('.valle__content').length) {
            var video = document.getElementById("video");
            if($('#video').length) {
                // Buttons
                var playButtonBig = document.getElementById("play-pause-big");
                var playButton = document.getElementById("play-pause");
                var muteButton = document.getElementById("mute");
                var fullScreenButton = document.getElementById("full-screen");

                // Sliders
                var seekBar = document.getElementById("seek-bar");
                var volumeBar = document.getElementById("volume-bar");

                // Event listener for the play/pause button
                $('#play-pause-big, #play-pause').click( function() {
                    if (video.paused == true) {
                        // Play the video
                        video.play();

                        // Update the button text to 'Pause'
                        playButtonBig.innerHTML = " ";
                        playButton.innerHTML = "<svg><use xlink:href='#shape-icon-pause' /></svg>";
                        $('.video__imagen').fadeOut(100);
                    } else {
                        // Pause the video
                        video.pause();

                        // Update the button text to 'Play'
                        playButtonBig.innerHTML = "<svg><use xlink:href='#shape-icon-play' /></svg>";
                        playButton.innerHTML = "<svg><use xlink:href='#shape-icon-play' /></svg>";
                    }
                });
                // Event listener for the seek bar
                seekBar.addEventListener("change", function() {
                    // Calculate the new time
                    var time = video.duration * (seekBar.value / 100),
                        bar = seekBar.value;
                    // Update the video time
                    video.currentTime = time;
                    $('.seek-done').css('width', bar + '%');
                });
                // Update the seek bar as the video plays
                video.addEventListener("timeupdate", function() {
                    // Calculate the slider value
                    var value = (100 / video.duration) * video.currentTime,
                        bar = video.currentTime;

                    // Update the slider value
                    seekBar.value = value;
                    $('.seek-done').css('width', value + '%');
                });
                // Pause the video when the slider handle is being dragged
                seekBar.addEventListener("mousedown", function() {
                    video.pause();
                });

                // Play the video when the slider handle is dropped
                seekBar.addEventListener("mouseup", function() {
                    video.play();
                });
                // Event listener for the mute button
                muteButton.addEventListener("click", function() {
                    if (video.muted == false) {
                        // Mute the video
                        video.muted = true;

                        // Update the button text
                        $('.mute-bar span').html("<svg><use xlink:href='#shape-icon-mute' /></svg>");
                    } else {
                        // Unmute the video
                        video.muted = false;

                        // Update the button text
                        $('.mute-bar span').html("<svg><use xlink:href='#shape-icon-volume' /></svg>");
                    }
                });
            }
        }
    }
    var figure = $(".index__item").hover( hoverVideo, hideVideo );

    function hoverVideo(e) {  
        $('video', this).get(0).play(); 
    }

    function hideVideo(e) {
        $('video', this).get(0).pause(); 
    }
})(jQuery);
