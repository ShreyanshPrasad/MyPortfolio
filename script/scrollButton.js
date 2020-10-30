$(document).ready(function(){
    //---------Scroll Top start------------
    var body = document.body,
    html = document.documentElement;

    var height = Math.max( body.scrollHeight, body.offsetHeight, 
                       html.clientHeight, html.scrollHeight, html.offsetHeight );

    //Check to see if the window is top if not then display button
    $(window).scroll(function(){
        if ($(this).scrollTop() > window.innerHeight) {
            $('.scrollToTop').fadeIn();
        } else {
            $('.scrollToTop').fadeOut();
        }
    });
    
    //Click event to scroll to top
    $('.scrollToTop').click(function(){
        $('html, body').animate({scrollTop : 0},800);
        return false;
    });
    //---------Scroll Top End--------------

    //-----Smoothly scroll to a section----
    $("a[href^='#']").click(function(e) {
        e.preventDefault();
    
        var position = $($(this).attr("href")).offset().top - 70;

        $("body, html").animate({
            scrollTop: position
        } /* speed */ );
    });
    //-----Smoothly scroll End----
    
});