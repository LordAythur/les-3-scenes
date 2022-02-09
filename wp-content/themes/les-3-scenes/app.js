jQuery(function($) {

    $( "#scroller" ).click(function() {
        window.scroll(0,0);
    });

    window.onscroll = function () {
        if(window.scrollY>400){
            $( "#scroller" ).css("opacity", "100%");
        }else{
            $( "#scroller" ).css("opacity", "0%");
        }
    
    };


})