var apps = {};


//This is the smoothScroll
apps.smoothScroll = function(){
	$('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
        || location.hostname == this.hostname) {

        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
           if (target.length) {
             $('html,body').animate({
                 scrollTop: target.offset().top
             }, 1000);
             return false;
            }   
        }
    });
}

//creat 20 diamonds
//for each diamond
//give it a random position
//<li class='square' style='position:absolute;left:X;top:Y;><p class="overlay"></p></li>'
//attach it in the coverOverlay

apps.placeDiamond = function(){
    console.log("tea");
    var aDiamond;
    for(var i = 0; i < 15; i++) {
        if(i<3){
            aDiamond = apps.bakeDiamond('first');
        }else if(i<6){
            aDiamond = apps.bakeDiamond('second');
        }else if(i<9){
            aDiamond = apps.bakeDiamond('third');
        }else if(i<12){
            aDiamond = apps.bakeDiamond('forth');  
        }else{
            aDiamond = apps.bakeDiamond('fifth');
        };      
        $('.coverOverlay ul').append(aDiamond);  
    };      
}

apps.bakeDiamond = function(timing){
    var aRandomX = Math.floor(Math.random()*screen.width);
    var aRandomY = Math.floor(Math.random()*screen.height);
    var diamondString = "<li class='square " + timing + "' style='position:absolute;left:" + aRandomX + "px;top:" + aRandomY +"px;><p class='overlay'></p></li>";
    return diamondString;
}

$(function(){
	apps.smoothScroll();
    apps.placeDiamond();
})