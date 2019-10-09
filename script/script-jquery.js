let sliderItems = $(".slider-box-slide.normal");
let sliderBox = $(".slider-box");
let sliderBullets = $(".slider-bullets-item");
let now = 0;


sliderBox.css("width", (sliderItems.length + 2) * 100 + "%");

console.dir(sliderItems);

$(".slider-arrow-item.left").click(function(event){


    if( now ===  0 ){
        now --;
        sliderBox.animate({
            left: -100 * (now + 1 ) + "%"
        },500, function(){
            now = sliderItems.length - 1;
            sliderBox.css("left", -100 *( now + 1 ) + "%");
            sliderBullets.removeClass("active");
            sliderBullets.eq(now).addClass("active");
        })
    }else{
        now--;
        sliderBox.animate({
            left: -100 * (now + 1 ) + "%"
        })   
        sliderBullets.removeClass("active");
        sliderBullets.eq(now).addClass("active");
    }
});
$(".slider-arrow-item.right").click(function(event){

    if( now == sliderItems.length - 1 ){
        now++;
        sliderBox.animate({
            left: -100 * (now + 1) + "%"
        }, 500, function(){
            now = 0;
            sliderBox.css("left", -100 * (now + 1 ) + "%")
            
            sliderBullets.removeClass("active");
            sliderBullets.eq(now).addClass("active");
        });
    }else{
        now++;
        sliderBox.animate({
            left: -100 * (now + 1 ) + "%"
        });
        sliderBullets.removeClass("active");
        sliderBullets.eq(now).addClass("active");
    }
});
sliderBullets.click(function(event){

    let clickNum = sliderBullets.index( $(this) );
    now = clickNum;
    sliderBox.animate({
        left: -100 * (now + 1) + "%"
    });
    sliderBullets.removeClass("active");
    $(this).addClass("active");
});


$(".the-main").click(function(event){
    event.preventDefault();

    $("html, body").animate({
        scrollTop: 0
    });
});

$(".price-list").click(function (event){
    event.preventDefault();

    $("html, body").animate({
        scrollTop: $('.price-box').offset().top - $("header").outerHeight()
    });
  });

$(".the-photo").click(function(event){
    event.preventDefault();

    $("html, body").animate({
        scrollTop: $('.gallery').offset().top - $("header").outerHeight()
    });
});

$(".about-me").click(function(event){
    event.preventDefault();

    $("html, body").animate({
        scrollTop: $('.biography-box').offset().top - $("header").outerHeight()
    });
});

$(".the-contacts").click(function(event){
    event.preventDefault();

    $("html, body").animate({
        scrollTop: $('.footer-conteiner').offset().top - $("header").outerHeight()
    });
});

$(".btn-content").click(function(event){
    event.preventDefault();

    $("html, body").animate({
        scrollTop: $('.popup-box').offset().top - $("header").outerHeight()
    });
});

$(".scroll").click(function(event){
    event.preventDefault();

    $("html, body").animate({
        scrollTop: 0
    });
});

$(".btn-price").click(function(){
    $(".price-form").css("display","flex").hide().fadeIn(2000);

});

$(".price-form-content-cansel").click(function(){
    $(".price-form").fadeOut(2000);
});

$(window).keyup(function(event){
    console.log(event);

    if( event.keyCode === 27 ){
        $(".price-form").fadeOut(2000);
    }
});

$(".burger").click(function(event){
    $(this).toggleClass("burger-active");
    $("nav").toggleClass("active")
});
