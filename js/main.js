window.onscroll = function(){
    if(window.pageYOffset > 400){
        $(".main-header").addClass("scroll-fix");
        $(".upper-header").removeClass("fix-pos");
    }
    else{
        $(".main-header").removeClass("scroll-fix");
        $(".upper-header").addClass("fix-pos");
    }

}

$("ul.main-ul li.dropdown").hover(function(){
    $(this).find("dropdown-menu").stop(true, true).delay(200).fadeIn(500);
}, function(){
    $(this).find(".dropdown-menu").stop(true, true).delay(200).fadeOut(500);
});