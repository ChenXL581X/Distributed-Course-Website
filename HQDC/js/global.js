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
	var isHide = true;
	var showProgress = function(percent,type,active){
		var progressBox = $("<div/>",{
			class : 'progress progress-global'
		});
		var progressBar = $("<div/>",{
			class : "progress-bar progress-bar-"+type+" progress-bar-striped"+" "+active,
			width: percent
		});
		progressBox.append(progressBar);
		var body = $("body");
		if(body.find(".progress-global").length==0){
			body.append(progressBox);
		}else{
			$(".progress-global").fadeIn();
		}
		isHide = false;

	}
	
	var hideProgress = function(){
		$(".progress-global").fadeOut();
		isHide = true; 
	}

	var updateProgress = function(percent){
		if(isHide)$(".progress-global").fadeIn();

		$(".progress-global .progress-bar").animate({
			"width": percent
		},100);
	}
	//showProgress("20%",'info','active');
	//showProgress("30%",'info','active');
	
	//var int=self.setInterval("updateProgress(80)",50);
	//updateProgress("80%");
	
})();