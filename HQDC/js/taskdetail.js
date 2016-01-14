$(document).ready(function(){
  if(typeof(editmodel)!='undefined'&&editmodel==true)
  {
    $("#title").removeAttr("disabled").css("border","1px solid");
    $("#context").removeAttr("disabled").css("border","1px solid");
    $(".operate").hide();
    $(".info").hide();
    $("#fileToUpload").show();
    $("#uptask").show();
    $("#deadline").show();
    $(".fileDel").show();
  }
  $("a#edit").click(function(){
   $("#title").removeAttr("disabled").css("border","1px solid").focus();
   $("#context").removeAttr("disabled").css("border","1px solid");
   $(".operate").hide();
   $(".info").hide();
   $("#fileToUpload").show();
   $("#uptask").show();
   $("#deadline").show();
   $(".fileDel").show();
  });
  $(".fileDel").click(function(){
   var mark;
   mark=$(this).attr("id");
   $.post("filedel.php",
     {
       'fileId':mark,
       'token':$("[name$='token']").val()
     },
     function(data,status){
         if(status=='success'){
            window.location.reload();
         }
         else $('.main').showMessage('删除失败！',4000);
     });
  });
    $("#fileToUpload").change(function(){ 
    var taskId=$("#id").val(); 
      $.ajaxFileUpload({
          url:'upfile.php',
          secureuri :false,
          fileElementId :'fileToUpload',
          dataType : 'json',
          data:{
            "taskId":taskId
          },
          success : function (data, status){
              if(typeof(data.error) != 'undefined'){
                  if(data.error != ''){
                      $('.main').showMessage(data.error,4000);
                  }else{
                      alert(data.msg);
                      window.location.reload();
                  }
              }
          },
          error: function(data, status, e){
              $('.main').showMessage(e,4000);
          }
  })
  return false;
    }) ;
  $("#uploadfile").click(function(){
    var taskId=$("#id").val();
     var title=$("#title").val();
     var endtime=$("#endtime").val();
     var desc=$("#context").val();
     $.post("updateTask_run.php",
       {
         'taskId':taskId,
         'title':title,
         'endtime':endtime,
         'desc':desc,
         'token':$("[name$='token']").val()
       },
       function(data,status){
           if(status=='success'){
              window.location.href="taskdetail.php?taskmark="+taskId;
           }
           else $('.main').showMessage('failed',4000);
       });
  });
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
  $("#homework").change(function(){ 
    var taskId=$("#id").val(); 
      $.ajaxFileUpload({
          url:'uphomework.php',
          secureuri :false,
          fileElementId :'homework',
          dataType : 'JSON',
          data:{
            "taskId":taskId
          },
          success : function (data, status){
            console.log(data);
              if(typeof(data.error) != 'undefined'){
                  if(data.error != ''){
                    alert(data.error);
                      $('.main').showMessage(data.error,4000);
                  }else{
                      alert(data.msg);
                      window.location.reload();
                  }
              }
          },
          error: function(data, status, e){
            console.log(data);
            alert(e);
              $('.main').showMessage(e,4000);
          }
  })
  return false;
    }) ;
});