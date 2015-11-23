
(function(){
	var left = $('.left'),
			button = $('.login-button'),
			nav = $('nav'), 
			navLeft = $('.nav-box'),
			portrait = $('.login-img'),
			login = $('#login'),
			right = $('.right');
	logIn = function(){
		
		left.addClass('logged');
		login.fadeOut().promise().done(function(){
			navLeft.fadeIn();
			nav.fadeIn();
		});
		
		portrait.addClass("logged");
		
		right.addClass("logged");
	}
	logOut = function(){
		
		left.removeClass('logged');
		login.fadeIn().promise().done(function(){
			navLeft.fadeOut();
			nav.fadeOut();
		});
		
		portrait.removeClass("logged");
		
		right.removeClass("logged");
	}
	
	button.click(function(e){
		e.preventDefault();
		logIn();



	});
	portrait.click(function(){
		logOut();
	});
})();