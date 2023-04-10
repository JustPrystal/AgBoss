$(document).ready(function(){
    $(window).scroll(function(){
        if($(window).scrollTop() > 50){
            $("#logo").addClass("scrolled");
        }else{
            $("#logo").removeClass("scrolled");
        }
    })
    $(".hamb").click(function(){
        $(".side-menu").addClass("active");
        $(".all-blocks").addClass("blur");
        $("header").addClass("blur");
        $('body').css("overflow-y", "hidden");
    })
    $(".cross svg").click(function(){
        $(".all-blocks").removeClass("blur");
        $(".side-menu").removeClass("active");
        $("header").removeClass("blur");
        $('body').css("overflow-y", "visible");
    })
})