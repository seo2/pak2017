

$(function() {
// slider principal

    function reset_video_size(video_width){
          //better use jquery selectors: owl.items() and $(owl.items()) give problems, don't know why
          var items = $('.owl-item:not([data-video])');
          var videos = $('.owl-video-wrapper');
          var v_height = 0;

          //user-defined width ELSE, width from inline css (when owl.autoWidth == false), 
          //ELSE, computed innerwidth of the first element.
          var v_width = (video_width) ? video_width : ((items.css('width') != 'auto') ? items.css('width') : items.innerWidth());

          items.each(function(){
            var h = $(this).innerHeight();
            if(h > v_height) v_height = h;
          });

        //  set both width and height
          videos.css({ 'height':v_height, 'width':v_width });
        };



$('.slider_home').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots: true,
    autoplay: false,
   // autoHeight: true,
  //  videoWidth: 1950, // Default false; Type: Boolean/Number
    //videoHeight: 580, // Default false; Type: Boolean/Number
    video: true,
    lazyLoad:true,
   // onInitialized: function(){ reset_video_size(); },
    //onResized: function(){ reset_video_size(); },
    responsive:{
        0:{
            items:1
        },
        768:{
            items:1
        },
        1200:{
            items:1
        }
    }
});

// slider calugas secciones

$('.box_slider').owlCarousel({
  
    loop:false,
    margin:10,
    nav:false,
    dots: true,
    autoplay: false,
    rewind: true,
    lazyLoad:true,
    responsive:{
        0:{
            items:1
        },
        768:{
            items:1
        },
        1024:{
            items:1
        }
    }

});

//slider logos malls xs

$('.slider_logos_mall').owlCarousel({
    loop:true,
    margin:40,
    nav:true,
    dots: false,
    autoplay: false,
    responsive:{
        0:{
            items:1
        },
        768:{
            items:4
        },
        1024:{
            items:4
        }
    }
});

// slider tiendas

    $(function () {
        var owl = $('#slider_tiendas');

        owl.owlCarousel({
            loop: true,
            lazyLoad:true,
            margin: 40,
            nav: true,
            autoplay: false,
            autoplayHoverPause: true,
            dots: true,
            owl2row: 'true', // enable plugin
            owl2rowTarget: 'item_tienda',    // class for items in carousel div
            owl2rowContainer: 'owl2row-item', // class for items container
            owl2rowDirection: 'utd', // ltr : directions
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        });
    });

/**
 * Owl2row
 * @since 2.0.2
 */

;(function ($, window, document, undefined) {
    Owl2row = function (scope) {
        this.owl = scope;
        this.owl.options = $.extend({}, Owl2row.Defaults, this.owl.options);
        //link callback events with owl carousel here

        this.handlers = {
            'initialize.owl.carousel': $.proxy(function (e) {
                if (this.owl.settings.owl2row) {
                    this.build2row(this);
                }
            }, this)
        };

        this.owl.$element.on(this.handlers);
    };

    Owl2row.Defaults = {
        owl2row: false,
        owl2rowTarget: 'item',
        owl2rowContainer: 'owl2row-item',
        owl2rowDirection: 'utd' // ltr
    };

    //mehtods:
    Owl2row.prototype.build2row = function(thisScope){
    
        var carousel = $(thisScope.owl.$element);
        var carouselItems = carousel.find('.' + thisScope.owl.options.owl2rowTarget);

        var aEvenElements = [];
        var aOddElements = [];

        $.each(carouselItems, function (index, item) {
            if ( index % 2 === 0 ) {
                aEvenElements.push(item);
            } else {
                aOddElements.push(item);
            }
        });

        carousel.empty();

        switch (thisScope.owl.options.owl2rowDirection) {
            case 'ltr':
                thisScope.leftToright(thisScope, carousel, carouselItems);
                break;

            default :
                thisScope.upTodown(thisScope, aEvenElements, aOddElements, carousel);
        }

    };

    Owl2row.prototype.leftToright = function(thisScope, carousel, carouselItems){

        var o2wContainerClass = thisScope.owl.options.owl2rowContainer;
        var owlMargin = thisScope.owl.options.margin;

        var carouselItemsLength = carouselItems.length;

        var firsArr = [];
        var secondArr = [];

        //console.log(carouselItemsLength);

        if (carouselItemsLength %2 === 1) {
            carouselItemsLength = ((carouselItemsLength - 1)/2) + 1;
        } else {
            carouselItemsLength = carouselItemsLength/2;
        }

        //console.log(carouselItemsLength);

        $.each(carouselItems, function (index, item) {


            if (index < carouselItemsLength) {
                firsArr.push(item);
            } else {
                secondArr.push(item);
            }
        });

        $.each(firsArr, function (index, item) {
            var rowContainer = $('<div class="' + o2wContainerClass + '"/>');

            var firstRowElement = firsArr[index];
                firstRowElement.style.marginBottom = owlMargin + 'px';

            rowContainer
                .append(firstRowElement)
                .append(secondArr[index]);

            carousel.append(rowContainer);
        });

    };

    Owl2row.prototype.upTodown = function(thisScope, aEvenElements, aOddElements, carousel){

        var o2wContainerClass = thisScope.owl.options.owl2rowContainer;
        var owlMargin = thisScope.owl.options.margin;

        $.each(aEvenElements, function (index, item) {

            var rowContainer = $('<div class="' + o2wContainerClass + '"/>');
            var evenElement = aEvenElements[index];

            evenElement.style.marginBottom = owlMargin + 'px';

            rowContainer
                .append(evenElement)
                .append(aOddElements[index]);

            carousel.append(rowContainer);
        });
    };

    /**
     * Destroys the plugin.
     */
    Owl2row.prototype.destroy = function() {
        var handler, property;

        for (handler in this.handlers) {
            this.owl.dom.$el.off(handler, this.handlers[handler]);
        }
        for (property in Object.getOwnPropertyNames(this)) {
            typeof this[property] !== 'function' && (this[property] = null);
        }
    };

    $.fn.owlCarousel.Constructor.Plugins['owl2row'] = Owl2row;
})( window.Zepto || window.jQuery, window,  document );

// end slider tiendas 

//caja search barra nav

            var submitIcon = $('.searchbox-icon');
            var inputBox = $('.searchbox-input');
            var searchBox = $('.searchbox');
            var isOpen = false;
             $('.rrss').css('z-index', '1');
            submitIcon.click(function(){
                if(isOpen == false){
                    searchBox.addClass('searchbox-open');
                    inputBox.focus();
                    isOpen = true;
                    $('.rrss').css('z-index', '0');

                } else {
                    searchBox.removeClass('searchbox-open');
                    inputBox.focusout();
                    isOpen = false;
                        $('.rrss').css('z-index', '1');
                }
            });  
             submitIcon.mouseup(function(){
                    return false;
                });
            searchBox.mouseup(function(){
                    return false;
                });
                $(document).mouseup(function(){
                        if(isOpen == true){
                            $('.searchbox-icon').css('display','block');
                            submitIcon.click();

                        }
                    });

            function buttonUp(){
                var inputVal = $('.searchbox-input').val();
                inputVal = $.trim(inputVal).length;
                if( inputVal !== 0){
                    $('.searchbox-icon').css('display','block');
                } else {
                    $('.searchbox-input').val('');
                    $('.searchbox-icon').css('display','block');
                }
            }

                // barra busqueda por categoria dektop
                $('#input_search_home').click(function (e) {
                   $('.search_home, #input_search_home').removeAttr('placeholder').addClass('clicked');
                     e.stopPropagation();
                });
                $(document).on('click', function (e) {
                        var input_clicked = $('.search_home, #input_search_home').removeClass('clicked');
                         $('#input_search_home').attr('placeholder' , "¿QUÉ TIENDA O CATEGORÍA ESTÁS BUSCANDO?");
                });

                // barra busqueda por categoria mobile
                $('#input_search_home_xs').click(function (e) {
                   $('.search_home, #input_search_home_xs').removeAttr('placeholder').addClass('clicked');
                     e.stopPropagation();
                });
                $(document).on('click', function (e) {
                        var input_clicked = $('.search_home, #input_search_home_xs').removeClass('clicked');
                         $('#input_search_home_xs').attr('placeholder' , "¿QUÉ TIENDA O CATEGORÍA ESTÁS BUSCANDO?");
                });


                $('.navbar-toggle').click(function () {
                // $('.overlay').toggle('fast');    
                 //$('.overlay').fadeToggle( "fast", "linear" );    
                      $('body').toggleClass('menu_open');
  
                });


        // colapsa menu al click en un enlace
        $('.nav a').on('click', function(){
            $('.navbar-toggle').click()

        });

           // ===== Scroll to Top ==== 
              $(window).scroll(function() {
                  if ($(this).scrollTop() >= 560) {        
                      $('#return-to-top').fadeIn(300);    // Fade in the arrow
                  } else {
                      $('#return-to-top').fadeOut(300);   // Else fade out the arrow
                  }
              });

              $('#return-to-top').click(function() {      // When arrow is clicked
                  $('body,html').animate({
                      scrollTop : 0                       // Scroll to top of body
                  }, 500);
              });


    //     $(document).click(function (event) {
    //         var clickover = $(event.target);
    //         var _opened = $(".navbar-collapse").hasClass("navbar-collapse in");
    //         var _form_control = $("input").hasClass("form-control");
    //         if (_opened === false && !clickover.hasClass("navbar-toggle") || _form_control === true ) {
    //             $("button.navbar-toggle").click();
    //         }

    //         console.log(_form_control);

    // });

});




