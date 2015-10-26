(function(){
	var body = $('body');
	$(".menu-toggle").bind("click",function(e){
		body.toggleClass('menu-open');
		//$('.header').toggleClass('menu-open-header');
		e.preventDefault();
	});
	
	$(".dropdown-toggle,.drop").bind("click",function(e){
		
		$(this).focus();
	});
	$('.drop').click(function(){
		$(this).parent().find('.dropdown-toggle').focus();
	})
	// $('.drop').mouseout(function(){
	// 	$(this).parent().find('.dropdown-toggle').blur();
	// })
	$('.down-a').click(function(e){
		e.preventDefault();
		var top = $('.main-page').offset().top;
		$("html, body").animate({ scrollTop: top }, "slow");
	});
	 // $(window).scroll(function () {
	 // 	//$(".slogan").css({"padding-top" : $(window).scrollTop()/1.5+200});
	 // 	var toggle = $('.navbar .menu-toggle .fa.fa-list');
	 // 	var page = $('.main-page');
	 // 	if($(window).scrollTop()>=page.offset().top){
	 // 		page.css('width','100%').css('left','0');
	 // 		toggle.css('color','#333');
	 // 	}
	 // 	else{
	 // 		page.css('width','90%').css('left','5%');
	 // 		toggle.css('color','#fff');

	 // 	}
	 // });
})();