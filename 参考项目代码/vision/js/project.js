		(function(){

			var i= 1;
			var card = $('.card');
			for(;i<3;i++){
				
				$new = card.clone(true);
				card.after($new);
			};
				var card = $('.card');
				
			$(".btn-tool").bind("click",function(){
				
				
				var choice = $(this).val();
				
				if(choice == 0){
					$('.operate').css('display','block');
					card.removeClass("unit-20");
					card.addClass("unit-100");
					card.css("background-color","#fff");
					$('.card:even').css("background-color","#F4F4FF");
				}else if(choice == 1){
					$('.operate').css('display','none');
					card.each(function(){
						var color = $(this).attr('data-color');
						$(this).css("background-color",color);	
					});

					card.removeClass("unit-100");
					card.addClass("unit-20");
									
				}
			});
			$('.desc-bloc').ready(function(){
				var text = $('.desc-bloc');
				var string = text.html();
				var length = $('.desc-bloc').html().length;

				if(length>=100){
					text.html(string.substring(0,80)+"...");
				}
			})

		})();