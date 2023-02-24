$(".burger").click(function(){
    $(".slide").animate({left: "0px"}, 500);
   
});
$(".close").click(function(){
    $(".slide").animate({left: "-170px"});
    
});
 
$("window").ready(function(){
    $(".notif").animate({top : '0px'}, 2500);
});
$("#cancel").click(function(){
    $(".notif").animate({top : '-400px'}, 2500);
});








 