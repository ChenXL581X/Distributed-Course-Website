(function(){		
	var tolog = $('#tolog');
	var toreg = $('#toreg');
	var logbox = $('.logbox');
	var regbox = $('.regbox');


	var left, opacity, scale; //fieldset properties which we will animate
	var animating; //flag to prevent quick multi-click glitches
	toreg.bind('click',function(e){
		e.preventDefault();
		if(animating) return false;
		animating = true;
		
		
		//show the next fieldset
		regbox.show(); 
		//hide the current fieldset with style
		logbox.animate({opacity: 0}, {
			step: function(now, mx) {
				//as the opacity of current_fs reduces to 0 - stored in "now"
				//1. scale current_fs down to 80%
				scale = 1 - (1 - now) * 0.2;
				//2. bring next_fs from the right(50%)
				left = (now * 50)+"%";
				//3. increase opacity of next_fs to 1 as it moves in
				opacity = 1 - now;
				logbox.css({'transform': 'scale('+scale+')'});
				regbox.css({'left': left, 'opacity': opacity});
			}, 
			duration: 800, 
			complete: function(){
				logbox.hide();
				animating = false;
			}, 
			//this comes from the custom easing plugin
			easing: 'easeInOutBack'
		});

	});

	$('#tolog').click(function(e){
		if(animating) return false;
		animating = true;
		e.preventDefault();
		logbox.show(); 
		//hide the current fieldset with style
		regbox.animate({opacity: 0}, {
			step: function(now, mx) {
				//as the opacity of current_fs reduces to 0 - stored in "now"
				//1. scale previous_fs from 80% to 100%
				scale = 0.8 + (1 - now) * 0.2;
				//2. take current_fs to the right(50%) - from 0%
				left = ((1-now) * 50)+"%";
				//3. increase opacity of previous_fs to 1 as it moves in
				opacity = 1 - now;
				regbox.css({'left': left});
				logbox.css({'transform': 'scale('+scale+')', 'opacity': opacity});
			}, 
			duration: 800, 
			complete: function(){
				regbox.hide();
				animating = false;
			}, 
			//this comes from the custom easing plugin
			easing: 'easeInOutBack'
		});
	});

})();