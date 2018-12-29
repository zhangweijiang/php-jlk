$(document).ready(function(){	
	$("#iframe").load(function(){ 
			var mainheight = $(this).contents().find("body").height()+10; 
			$(this).height(mainheight); 
			}); 
		  $('.flexslider').flexslider({
		    directionNav: true,
		    pauseOnAction: false
		  });
		  $('ul.nav>li').hover(function(){
				$(this).find('ul.nav_son').stop(true,false).animate({top:'0px'});
		},function(){
				$(this).find('ul.nav_son').stop(true,false).animate({top:'50px'});
		      });	
//火箭点击的事件
	$("#gotop1").click(function(e) {
 	TweenMax.to(window, 1.5, {scrollTo:0, ease: Expo.easeInOut});
 	var huojian = new TimelineLite();
	huojian.to("#gotop1", 1, {rotationY:720, scale:0.6, y:"+=40",
	 ease:  Power4.easeOut})
	.to("#gotop1", 1, {y:-1000, opacity:0, ease:  Power4.easeOut}, 0.6)
	.to("#gotop1", 1, {y:0, rotationY:0, opacity:1, scale:1, 
	ease: Expo.easeOut, clearProps: "all"}, "1.4");
	}); 
	//结束火箭点击事件

			$('#service_hot_show').click(function(){
					$('#service_hot_show').hide();
					$('#service_hot_hide').show();
				});
				$('.close').click(function(){
					$('#service_hot_show').show();
					$('#service_hot_hide').hide();
			});

		});   