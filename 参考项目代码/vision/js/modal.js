(function($){
	$.fn.modal = function(opt){
		var settings,createModal,closeModal;
		settings = $.extend({
			'title':'title',
			'text':'text'
		},opt);
		var body = $('body');

		closeModal = function(shade){

			
			shade.animate({opacity: 0}, {
			
			step: function(n){
				s = 1-n; //scale - will animate from 0 to 1
				l=1+s/2;
				var top = 120-s*120;
				$(this).find('.modalbox').css("margin-top", top);
			}, 
			duration: 200, 
			//easing: 'easeInOutBack',
		}).promise().done(function(){
			shade.remove();
		});
	
			
		};



		createModal = function(data){
			
			var shade,close,save,modalbox,modalhead,modaltext,modalfooter;
			shade = $('<div />',{
				class: 'messagebox'
			})


			close = $('<botton />',{
				html :'取消',
				href:'#',
				class: 'btn'
			}).on('click',function(e){
				closeModal(shade);
				e.preventDefault();
			});

			save = $('<botton />',{
				html :'保存',
				href:'#',
				class: 'btn btn-blue'
			});
			modalhead = $('<div />',{
				html: settings.title,
				class:'modal-header'
			});
			modaltext = $('<div />',{
				html: settings.text,
				class:'modal-message'
			});
			modalfooter= $('<div />',{
				
				class:'modal-footer'
			}).append(close,save);
			modalbox = $('<div />',{
				
				class:'modalbox'
			}).append(modalhead,modaltext,modalfooter);
			shade.append(modalbox);
			body.prepend(shade);
			
			modalbox.animate({opacity: 1}, {
			
			step: function(n){
				var top = n*120;
				modalbox.css({'margin-top': top});

			}, 
			duration: 200, 
			//easing: 'easeInOutBack',
		})
		// 	modalbox.animate({opacity: 1}, {
			
		// 	step: function(n){
		// 		var s = 1-n; //scale - will animate from 0 to 1
		// 		var scale = 1 + s;
		// 		$(this).css("transform", "scale("+scale+")");
		// 	}, 
		// 	duration: 100, 
		// 	//easing: 'easeInOutBack',
		// })
		};
		this.on('click',function(){
			var self = $(this);
			// $.ajax({
			// 	url: self.data('content'),
			// 	type:'get',
			// 	cache: false,
			// 	success: function(data){
			// 		createModal(data);
			// 	},
			// 	error:function(){
			// 		createModal("there was an erro");

			// 	}
			// });
		createModal("fsdf");
		})

	}
})(jQuery);