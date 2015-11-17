(function(){

	$.fn.showMessage = function(message,delay){

		var box = $("<div/>",{
			class : 'messages-box',
			html : message
		});
		this.append(box);
		box.addClass("show");
		box.delay(delay).promise().done(function(){
			box.removeClass("show").delay(1000).promise().done(function(){
				box.remove();
			});
		});
		
	};
	//$(".main").showMessage("您已成功登录本系统，现在可以进行用户操作",4000);
})();