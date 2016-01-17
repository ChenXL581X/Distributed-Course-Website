$(document).ready(function(){
	function checkEndTime(startTime){  
	    var end=new Date(startTime.replace("-", "/").replace("-", "/"));  
	    var start=new Date();  
	    if(end>start){  
	        return false;
	    }  
	    return true;
	};
	function checkFrom(){
		alert();
		if($("#title").val()=='')
		{
			$("#title").focus();
		}
		else if(checkEndTime($("#endtime").val())){
			$("#endtime").focus();
		}
		else if($("#context").val()=='')
		{
			$("#context").focus();
		}
		else $("#submit").removeAttr("disabled");
	}
	$('form :input').blur(function(){
		if($("#title").val()=='')
		{
			$("#title").focus();
		}
		else if(checkEndTime($("#endtime").val())){
			$("#endtime").focus();
		}
		else if($("#context").val()=='')
		{
			$("#context").focus();
		}
		else $("#submit").removeAttr("disabled");
	});
	$(".fileDel").click(function(){
	//  $.post("filedel.php",
	//    {
	//      'fileId':mark,
	//      'token':$("[name$='token']").val()
	//    },
	//    function(data,status){
	//        if(status=='success'){
	//           window.location.href="taskdetail.php?taskmark="+$("#id").val()+"&edit=true";
	//        }
	//        else $('.main').showMessage('删除失败！',4000);
	//    });
	});
	jQuery(function(){   
		function ajaxFileUp(){
		    $.ajaxFileUpload({
		        url:'createfile_run.php',
		        secureuri :false,
		        fileElementId :'inputFile',
		        dataType : 'json',
		        success : function (data, status){
		            if(typeof(data.error) != 'undefined'){
		                if(data.error != ''){
		                    alert(data.error);
		                }else{
		                    var rs=data.msg;
		                    $(".filelist").append("<span><a href='"+data.url+"' target='_black'>"+rs+"</a></span><span class='fileDel'>[删除]</span><br />").append("<input type='hidden' name='uploadfile[]' value='"+rs+"'>");
		                }
		            }
		            $("#inputFile").change('change', function(){
		              ajaxFileUp();
		            });
		        },
		        error: function(data, status, e){
		            alert(e);
		            $("#inputFile").change('change', function(){
		              ajaxFileUp();
		            });
		        }
			})
		}
		$("#inputFile").change('change', function(){
		  ajaxFileUp();
		});
	});
})