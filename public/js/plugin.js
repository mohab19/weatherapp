 
//scroll to top btn
$(window).scroll(function(){
if($(window).scrollTop() > 300)
$("#btnUp").fadeIn(200);
else
$("#btnUp").fadeOut(2000);
});

$("#btnUp").click(function(){
    $("body,html").animate({
    scrollTop:0},2000)
    });
	$(document).ready(function () {
        $('.navbar-light .dmenu').hover(function () {
                $(this).find('.sm-menu').first().stop(true, true).slideDown(150);
            }, function () {
                $(this).find('.sm-menu').first().stop(true, true).slideUp(105)
            });
        });
        $(document).ready(function () {
            $('.navbar-light .dmenu').hover(function () {
                    $(this).find('.sm-menu').first().stop(true, true).slideDown(150);
                }, function () {
                    $(this).find('.sm-menu').first().stop(true, true).slideUp(105)
                });
            });

$("input").click(function(){
$(".search-box img").hide();
});            

