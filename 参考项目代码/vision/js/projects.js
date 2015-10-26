(function(){

	$('.check-all label').bind("click",function(){
		$('#check-fa').toggleClass("fa-square-o");
		$('#check-fa').toggleClass("fa-check-square");
	});
	// var flag=1;
	// $('tr').mouseover(function(){

	// 	$(this).next(".toggle-tr").css('display','inline-block').animate({'max-height':'200px'},"slow");
		
	// });
	// $(".toggle-tr").mouseover(function(){
	// 	flag=0;
		
	// })
	// $(".toggle-tr").mouseout(function(){
	// 	flag=1;
		
	// })
	// $('tr').mouseout(function(){
	// 	$(this).delay(300);
		
	// 	if(flag==1){
	// 	$(this).next(".toggle-tr").animate({'max-height':'0px'},"slow").promise().done(function(){
	// 		$(this).css('display','none');
	// 	});
	// 	}
	// });
		$('tr').modal({
			'title':'title',
			'text':'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod'+
			'tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,'+
			'quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo'+
			'consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse'+
			'cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non'+
			'proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'

		})	
})();