window.onscroll = function(){
    if(window.pageYOffset > 50){
        $(".main-header").addClass("scroll-fix");
    }
    else{
        $(".main-header").removeClass("scroll-fix");
    }

}