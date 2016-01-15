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
	jQuery(function(){   
	    $("#inputFile").change(function(){   
	      $.ajaxFileUpload({
	          url:'createfile_run.php',
	          secureuri :false,
	          fileElementId :'inputFile',
	          dataType : 'json',
	          success : function (data, status){
	              if(typeof(data.error) != 'undefined'){
	              	console.log(data);
	                  if(data.error != ''){
	                      alert(data.error);
	                  }else{
	                      var rs=data.msg;
	                      $(".filelist").append("<span>"+rs+"</span>").append("<input type='hidden' name='uploadfile[]' value='"+rs+"'>");
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
})