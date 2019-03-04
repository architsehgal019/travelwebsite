$(document).ready(function(){
window.onscroll = function(){
    if(window.pageYOffset > 400){
        $(".main-header").addClass("scroll-fix");
        $(".upper-header").removeClass("fix-pos");
        $(".site-logo").css("height","65px");
        $(".site-logo").css("width","90px");
        console.log("Scorlling");
    }
    else{
        $(".main-header").removeClass("scroll-fix");
        $(".upper-header").addClass("fix-pos");
        $(".site-logo").css("height","80px");
        $(".site-logo").css("width","120px");
    }

    };
    
       $( ".dropdown_submenu" ).hover(function() {
        console.log("Hover");
        $(".dropdown-menu").css("display","block");

        });
    
        $(".dropdown-item").hover(function() {
            console.log("Hover");
            $(this).next().find(".dropdown-item-sub").css("display","block");
        });
    
    $( ".dropdown-item" ).mouseleave(function() {
    $(".dropdown-item-sub").css("display","none");
        console.log("Left");
    });
    
    
    $('#tabs').on('click','.tablink,#prodTabs a',function (e) {
    e.preventDefault();
    var url = $(this).attr("data-url");

    if (typeof url !== "undefined") {
        var pane = $(this), href = this.hash;

        // ajax load from data-url
        $(href).load(url,function(result){      
            pane.tab('show');
        });
    } else {
        $(this).tab('show');
    }
});
    
    });



