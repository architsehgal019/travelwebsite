$(document).ready(function(){
window.onscroll = function(){
    if(window.pageYOffset > 50){
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
    

    $("#google-reviews").googlePlaces({
        placeId: 'ChIJ9W_ZHr8EDTkRf9cVfSBNP6c' //Find placeID @: https://developers.google.com/places/place-id
      , render: ['reviews']
      , min_rating: 4
      , max_rows:4
   });
    
    
    
    
    });

$(document).ready(function () {

    $('.navbar .dropdown-item').hover(function (e) {
        var $el = $(this).children('.dropdown-toggle');
        var $parent = $el.offsetParent(".dropdown-menu");
        $(this).parent("li").toggleClass('open');

        if (!$parent.parent().hasClass('navbar-nav')) {
            if ($parent.hasClass('show')) {
                $parent.removeClass('show');
                $el.next().removeClass('show');
                $el.next().css({"top": -999, "left": -999});
            } else {
                $parent.parent().find('.show').removeClass('show');
                $parent.addClass('show');
                $el.next().addClass('show');
                $el.next().css({"top": $el[0].offsetTop, "left": $parent.outerWidth() - 4});
            }
            e.preventDefault();
            e.stopPropagation();
        }
    });

    $('.navbar .dropdown').on('hidden.bs.dropdown', function () {
        $(this).find('li.dropdown').removeClass('show open');
        $(this).find('ul.dropdown-menu').removeClass('show open');
    });

});



