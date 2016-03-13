var apps = {};

apps.makeBg = function(){
	console.log("tea")
    for(var i = 0; i < 500; i++) {
    	var className = 'square'+ i;
	    var square = '<li class= "square ' + className + '"><p class="overlay"></p></li>';
	    $('.coverOverlay ul').append(square);
    }
    apps.selectRandomSquare();
	
}
apps.selectRandomSquare = function(){
	console.log('something')
	    //make an array with 10 random number for targeting 10 random grid.
    //targeting 10 random grid and give them a overlay with color.
    //1 seconds later take away that color
    var randomNum = [];

    $('.square').on('click',function(){

    		console.log('r')
    		$(this).addClass('canary').delay(1000).queue(function(){
	    		$(this).removeClass('canary').dequeue();
    		});   	
    });
    // for (var i = 0; i < 10; i++){
    // 	var aRandomNum = Math.floor(Math.random()*500);
    // 	randomNum.push(aRandomNum);

    // 	var targetSquare = 'square' + aRandomNum;
    // 	$('.'+targetSquare).addClass('canary',500,function(){
    // 		$(this).removeClass('canery',500);
    // 	});
    // 	// console.log(targetSquare);
    // }
}

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

$(function(){
	apps.smoothScroll();
})