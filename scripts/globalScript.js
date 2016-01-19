function header(){
    $(window).scroll(function(){
        var windowWidth = $(this).width();
        var windowHeight = $(this).height();
        var windowScrollTop = $(this).scrollTop();

        if( windowScrollTop > 235 ){
            $('#main-head').css('position','fixed');
            $('main-header').show(500);
        } else {
            $('#main-head').css('position','static');
        }
    });
}
function Click(){
    $('.popup').click(function(event){
        var pop = $(this);

        var Url = pop.attr('href');
        var Red = pop.attr('data-red');

        window.open(Url, Red, 'width=400,height=400');
        return false;
    });
}
function NavShow(){
    var item = $('#main-head #wrap .menu');
    $('.nav-show').on('click', function(){

        if(item.is('.menu-show')){
            item.removeClass('menu-show');
        }else{
            item.addClass('menu-show');
        }
    });
}
/* -------- SLIDER ----------- */
function Slider(event){
    /* valores iniciales */
    $('#main-slider #Slider li:first-child').addClass("sActive");
    var countItems = $('#main-slider #Slider > li').length;
    var sItem = $('#main-slider #Slider li');
    var sItemW = $('#main-slider #Slider .sActive').width();
    
    /* valores de configuracion */
    var sTime = parseFloat($("#main-slider").attr('data-sTime'));
    
    /* Repetir el ciclos esta funcion */
    setInterval(function(){
        var $ = jQuery;
        var sComp = $('#main-slider #Slider .sActive').next().find('a img').attr("src");
        
        if(sItem.is('.sActive')){
            if(sComp == undefined){
                $('#main-slider #Slider li:last-child').removeClass("sActive");
                $('#main-slider #Slider li:first-child').addClass("sActive");
            }
            else{
                $('#main-slider #Slider .sActive').removeClass('sActive').next().addClass('sActive');
            }
        }
    }, sTime);
}

// segundo modelo de slider

function Slider2(event){
    /* valores iniciales */
    
    var countItems = jQuery('#main-slider #Slider2 > li').length;
    var wItem = jQuery('#main-slider #Slider2 li').width();
    var full_w = wItem * countItems;
    jQuery('#main-slider #Slider2').css('width', full_w);
    
    for(i = countItems ; i > 0; i-- ){
        jQuery('#main-slider #Slider2 li:nth-child('+ i +')').css('z-index', '-' + i);
    }
    
    /* valores de configuracion */
    var sTime = parseFloat( jQuery("#main-slider").attr('data-sTime'));

    var item = jQuery('#main-slider #Slider2 li:first-child');
    var uItem = jQuery('#main-slider #Slider2 li:nth-last-child(1)');
        
    /* Repetir el ciclos esta funcion */
        
    item.delay(sTime).animate({'margin-left': '-3000px'}, 2000, function(){
        item.appendTo( jQuery('#main-slider #Slider2') );
        uItem.css('margin-left','0px');
        Slider2();
    });
}

$(document).on('ready', function(){
    Click();
    NavShow();
});
