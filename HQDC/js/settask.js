$(document).ready(function(){
  $(".fileDel").click(function(){
   var mark;
   mark=$(this).parent().attr("id");
   $.post("filedel.php",
     {
       'fileId':mark,
       'token':$("[name$='token']").val()
     },
     function(data,status){
         if(status=='success'){
            alert(data);
            $(this).parent().remove();
            window.location.reload();
         }
         else alert('删除失败！');
     });
  });
});

jQuery(function(){   
    $("#buttonUpload").click(function(){     
      $.ajaxFileUpload({
          url:'upfile.php',
          secureuri :false,
          fileElementId :'fileToUpload',
          dataType : 'json',
          data:{
            "taskId":$("[name$='taskId']").val(),
            'token':$("[name$='token']").val()
          },
          success : function (data, status){
              if(typeof(data.error) != 'undefined'){
                  if(data.error != ''){
                      alert(data.error);
                  }else{
                      alert(data.msg);
                      window.location.reload();
                  }
              }
          },
          error: function(data, status, e){
              alert(e);
          }
  })
  return false;
    }) 
});