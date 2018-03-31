$.fn.parallaxIn = function(orientation, speed) {
	orientation = typeof orientation !== 'undefined' ? orientation : 'left';
	speed = typeof speed !== 'undefined' ? speed : 400;

	for (var i = 0; i < $(this).length; i++) {
		var animation= {};
		/* Random
		 * random depending on length and > 0 . 
		 * This will create parallax effect through speed on each element 
		 */
		var rand=(1+Math.floor(Math.random()*(1+$(this).length))); 
		/* Animation */
		animation[orientation] = 0;		
		$(this[i]).stop().animate(animation, speed);		
	}
	return this;
}

$.fn.parallaxOut = function(orientation, speed, outOfScreen) {
	orientation = typeof orientation !== 'undefined' ? orientation : 'left';
	speed = typeof speed !== 'undefined' ? speed : 400;
	outOfScreen = typeof outOfScreen !== 'undefined' ? outOfScreen : false;

	for (var i = 0; i < $(this).length; i++) {
		var animation= {};
		/* Random
		 * random depending on length and > 0 . 
		 * This will create parallax effect through speed on each element 
		 */
		var rand=(1+Math.floor(Math.random()*(1+$(this).length))); 
		/* objectSize
		 * left or right : use with
		 * top or bottom : use height 
		 */
		var objectSize = (orientation == 'left' || orientation == 'right') ? ($(this[i]).outerWidth(true)) : ($(this[i]).outerHeight(true)); 
		/* offset
		 * use offset depending on the specified orientation
		 * default : left
		 * if user specified outOfScreen : use offset from screen instead of parent element
		 */
		var offset = 0;
		switch(orientation) {
			case 'left'		: offset = (!outOfScreen) ? ($(this[i]).position().left) 	: 	($(this[i]).offset().left) 	; break;
			case 'top' 		: offset = (!outOfScreen) ? ($(this[i]).position().top) 	: 	($(this[i]).offset().top) 	; break;
			case 'right' 	: offset = (!outOfScreen) ? ($(this[i]).parent().width() - ($(this[i]).position().left + $(this[i]).outerWidth(true))) 	: 	($(window).width() - ($(this[i]).offset().left + $(this[i]).outerWidth(true))) ;
			break;
			case 'bottom' 	: offset = (!outOfScreen) ? ($(this[i]).position().bottom) 	: 	($(this[i]).offset().bottom); break;
			default 		: offset = (!outOfScreen) ? ($(this[i]).position().left) 	: 	($(this[i]).offset().left) 	; break;
		}
		/* Animation */
		animation[orientation] = (-(objectSize + offset) * rand); // -(width(including margin & padding) + offset)
		console.log($(this[i]).attr('id')+ " : -(" +objectSize+ " + "+ offset + ") * " + rand + " = " + animation[orientation]);
		$(this[i]).stop().animate(animation, speed);
	}
	return this;
}

$(document).ready(function(){
	HOME=window.location.hostname;
	if((window.location.hostname).indexOf('skrib')>-1) {
		HOME = "http://"+window.location.hostname+"";
	} else {
		HOME = "http://"+window.location.hostname+"/df";
	}
	
	veryfast=10;
	fast=200;
	normal=400;
	slow=600;
	veryslow=800;
	
	/* Load menu */
	var elementsPanelColor=$("#panel-color").children();
	var elementsPanelBGColor=$("#panel-bgcolor").children();				
	setTimeout(function(){
		elementsPanelColor.parallaxOut('left', normal);				
		elementsPanelBGColor.parallaxOut('left', normal, true);
		$("#changecolor #topicon").stop(true,true).show(veryslow);
	}, 700);
	
	/* Menu effect */
	$("#changecolor").hover(
		function(){
			elementsPanelColor.parallaxIn('left', fast);
			elementsPanelBGColor.parallaxIn('left', fast);
			$("#changecolor #topicon").stop(true,true).hide(normal);
		}, function() {
			elementsPanelColor.parallaxOut('left', normal);
			elementsPanelBGColor.parallaxOut('left', normal, true);
			$("#changecolor #topicon").stop(true,true).show(veryslow);
		}
	);
	
	/* Change logo */
	$("#panel-color .soon-img-mini").click(function() {
		var color=$(this).attr('id');
		var logo=$("#logoimg");
		var logotmp=$("#logotmp");
		logotmp.attr("src",HOME+"/img/soon-"+color+".png");
		logotmp.fadeIn(normal);
		logo.fadeOut(normal, function() {
			logo.attr("src",HOME+"/img/soon-"+color+".png");
			logo.fadeIn(veryfast, function() {
				logotmp.fadeOut(veryfast);
				logotmp.attr("src","");
			});
		});
		event.preventDefault();
	});
	
	/* Load & Change theme */
	$("html, body").animate(
		{
			backgroundColor: $("#panel-bgcolor #light").css("backgroundColor"),
			color: $("#panel-bgcolor #dark").css("backgroundColor")
		}
	);
	console.log($("#panel-bgcolor #dark").css("backgroundColor"));
	
	$("#changecolor #topicon").css("background","url('"+HOME+"/img/topicon-dark.png')");
	$("#panel-bgcolor #light").hide();
	$("#panel-bgcolor .soon-img-mini").click(function(){
		var bgcolor=$(this).css("backgroundColor");
		$(this).hide();
		if($(this).attr("id")=="dark") {
			$("#changecolor #topicon").css("background","url('"+HOME+"/img/topicon-light.png')");
			$("#panel-bgcolor #light").show();
			$("html, body").animate(
				{
					backgroundColor: bgcolor,
					color: $("#panel-bgcolor #light").css("backgroundColor")
				}
			);
		} else {
			$("#changecolor #topicon").css("background","url('"+HOME+"/img/topicon-dark.png')");
			$("#panel-bgcolor #dark").show();
			$("html, body").animate(
				{
					backgroundColor: bgcolor,
					color: $("#panel-bgcolor #dark").css("backgroundColor")
				}
			);
		}
		event.preventDefault();
	});
});