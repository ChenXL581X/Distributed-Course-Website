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
if(typeof(searchcontent)!="undefined") {
	$("#search").val(searchcontent);
	// $("td a.title").each(function(){
	// 	alert($(this).text());
		
	// });
	// alert($("td p").text())
}
$("#search").keydown(function(e){
	if(e.which==13){
		var text=$(this).val();
		var content=text.split(/\s+/);
		var params="key";
		$.each(content,function(n,value) {  
            if(n==0) params=params+"="+value;
            else params=params+"+"+value;
        });
        window.location.href="forum.php?"+params;
	}
})