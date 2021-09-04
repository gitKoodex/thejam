$(window).on("load", function() {
    var menuItems = $("#mainMenu ul").children();
    console.log(typeof(menuItems));
    var len = menuItems.length;
    console.log(len);
    var i=0;
    var checher =0;
    if(len>8){
        $("#mainMenu").prepend("<ul class='new'></ul>");
        $("#mainMenu ul").children().each(function(){
            // console.log($(this).html());
            if(i<8){
                $("#mainMenu ul.new").append("<li>"+$(this).html()+"");
            }
             if(i>=8){
                if(checher == 0){
                   $("#mainMenu ul.new").append("<li><a>ادامه منو...</a>");
                   $("#mainMenu ul.new li").last().append("<ul class='sub-menu'>");
                    checher = 1;
                }
                $("#mainMenu ul.new>li:last>ul.sub-menu").append("<li>"+$(this).html()+"");
             }
            i++;
        });
        $("#mainMenu>ul:not(.new)").remove();
    }else{

    }

});
$(function(){
    $( window ).resize(function() {
        location.reload(true);
    });
    var swiper = new Swiper(".DefaultSwiper", {
        pagination: {
            el: ".swiper-pagination",
            dynamicBullets: true,
          },
    });
    var theswiper = new Swiper(".mySwiperResponsive", {
        slidesPerView: 1,
        spaceBetween: 30,
        breakpoints: {
            640: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 40,
            },
            1024: {
                slidesPerView: 4,
                spaceBetween: 50,
            },
        },
        pagination: {
            el: ".mySwiperResponsive-pagination",
            clickable: true,
        },
    });
    $("#menuBars").on('click',function() {
        $("#menuBars").toggleClass('active');
        $("#supermenu").toggleClass('d-none d-lg-flex active');
        $("#mainMenu").children().appendTo("#supermenu");
        $("#mainMenu").unwrap();
        $("#menuCloser").toggleClass("d-none");
        return false;
     });
    $("#menuCloser").on('click',function (){
        $("#menuCloser").toggleClass("d-none");
        $("#menuBars").toggleClass('active');
        $("#supermenu").toggleClass('d-none d-lg-flex active');
    });

});


