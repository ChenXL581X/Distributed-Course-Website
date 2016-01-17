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
            // alert(data);
            window.location.reload();
         }
         else 
          {
          // alert('删除失败！');
          }
     });
  });
  function uploadHomework(taskId){
        $.ajaxFileUpload({
            url:'uphomework.php',
            secureuri :false,
            fileElementId :'homework',
            dataType : 'JSON',
            data:{
              "taskId":taskId
            },
            success : function (data, status){
                if(typeof(data.error) != 'undefined'){
                    if(data.error != ''){
                      // alert(data.error);
                        $('.main').showMessage(data.error,4000);
                        location.reload();
                    }else{
                        // alert(data.msg);
                        location.reload();
                    }
                }
                $("#homework").change('change', function(){
                  uploadHomework($(this).attr('class'));
                });
                window.location.reload();
            },
            error: function(data, status, e){
                $('.main').showMessage(e,4000);
                $("#homework").change('change', function(){
                  uploadHomework($(this).attr('class'));
                });
                window.location.reload();
            }
    })    
  }
  $("#homework").change('change', function(){
    uploadHomework($(this).attr('class'));
  });
  $(".look").click(function(){
    $(this).parent().parent().children(".homeworkList").slideToggle();
  });
});