$(function(){
	
	var links = $(".navbar-nav a");
	
	$(window).scroll(function(){
		var topScroll = $(window).scrollTop();
		links.each(function(){
			var href = $(this).attr('href');
			var el = $(href);
			var posSection = el.offset().top;
			var hSection = el.height();
			
				if(posSection <= topScroll && (posSection + hSection) > topScroll){
					links.removeClass('navbar-nav')
					$(this).addClass('navbar-nav');
				}else{
					$(this).removeClass('navbar-nav');
				}
		})
		
	});
	
});