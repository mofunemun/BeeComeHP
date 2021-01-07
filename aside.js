$(".header-sp").on('click',function(){
    $(".header-sp").toggleClass("is-open");
    $("aside").toggleClass("is-open");
    $(".header-sp-upper").toggleClass("is-open");
    $(".header-sp-middle").toggleClass("is-open");
    $(".header-sp-bottom").toggleClass("is-open");
});

$(".aside-sp-nav-item").on('click',function(){
    $(".header-sp").toggleClass("is-open");
    $("aside").toggleClass("is-open");
    $(".header-sp-upper").toggleClass("is-open");
    $(".header-sp-middle").toggleClass("is-open");
    $(".header-sp-bottom").toggleClass("is-open");
});