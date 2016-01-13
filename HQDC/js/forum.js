(function(){
	// for (var i =0;i<=3;i++) {
	// 		var tr = $('.table tr').clone();
	// 	$('.table').append(tr);
	// };
	//alert($(document).height());
	var num = 10,total = 10;
	$(window).scroll(function(){
		//alert($(window).scrollTop());
    if($(window).scrollTop() == ($(document).height()-$(window).height())){
    	content = {'num':num,'total':total};
        $.ajax({
	             type: "POST",
	             url: "getPost.php",
	             data: {data:content},
	             // dataType: "json",
	             success: function(data){
	                         // input_reply.val('');
	                        
	                         $('.sk-spinner').remove();
	                         //console.log(data);
	                        total+=num;
	                        if(data!='null')$('.forum-table tbody').append(data);
	                      }
	         	});
    }
	});
	

})();