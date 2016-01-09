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
$(document).ready(function(){
  $(".delete-task").click(function(){
   var mark;
   mark=$(this).parent().children(".taskid").val();
   $.post("deltask_ajax.php",
     {
       'taskid':mark
     },
     function(data,status){
         if(status=='success'){
            alert(data);
            window.location.href="course.php";
         }
         else 
            {
            alert('删除失败！');
            }
     });
  });
});