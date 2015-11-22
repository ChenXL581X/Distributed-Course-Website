(function(){
	var isShow = false;
	$('.showContext').click(function(e){
		e.preventDefault();
		var context = $(this).parent().parent().find('div.context');
		context.toggleClass("context-show");
		$(this).find('i').toggleClass('fa-arrow-down').toggleClass('fa-arrow-up');
		if(isShow==false){
			$(this).find("span").html('收起');
			isShow=true;
		}else{
			$(this).find("span").html('展开');
			isShow  = false;
		}
		

	});
})();