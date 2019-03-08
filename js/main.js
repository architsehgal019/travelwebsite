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

//("ul.main-ul li.dropdown").hover(function(){
//    $(this).find("dropdown-menu").stop(true, true).delay(200).fadeIn(500);
//}, function(){
//    $(this).find(".dropdown-menu").stop(true, true).delay(200).fadeOut(500);
//});

//$(".nav-item").on("hover",function(){
//    alert("Hover");
//    $(this).next().css("display","block");
//    
//});
    
       $( ".dropdown_submenu" ).hover(function() {
        console.log("Hover");
        $(".dropdown-menu").css("display","block");

});
    
    $( ".dropdown-item" ).hover(function() {
        console.log("Hover");
        $(this).next().find(".dropdown-item-sub").css("display","block");
////  $( this ).fadeOut( 100 );
////  $( this ).fadeIn( 500 );
});
//    
//    $( ".dropdown-item" ).mouseenter(function() {
//   $(this).find("dropdown-item-sub").css("display","block");
//  })
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



