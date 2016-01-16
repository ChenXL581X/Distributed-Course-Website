(function(){

	$('.importance').change(function(){
		if(!jQuery.isNumeric($(this).val())||$(this).val()<=0||$(this).val()>=10){
			$('.main').showMessage('请输入0~10之间的数字',3000);
			$(this).val(5);
		}
		var percent = $(this).val()*10+'%'+'!important',
			percent1 = (100-$(this).val()*10)+'%'+'!important';
		//alert(percent);	
		$(this).parent().find('.task-name').css("cssText","width: "+percent); 
		$(this).css("cssText","width: "+percent1); 
		
	});
})();