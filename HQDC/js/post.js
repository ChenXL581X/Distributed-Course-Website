(function(){
	var isShow = false;
	$('a.show').click(function(e){
		e.preventDefault();
		$(this).parent().parent().find('img').toggleClass('show');
		if(!isShow){
			$(this).html('收起图片');
		}else{
			$(this).html('展开图片');
		}
		isShow = true;
	});
})();