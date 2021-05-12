$(document).ready(function(){
    $(".gnb>ul>li").on("mouseover", function(){
        $(this).children(".sub2").stop().slideDown();
    });

    $(".gnb>ul>li").on("mouseleave", function(){
        $(this).children(".sub2").slideUp();
    });
});




