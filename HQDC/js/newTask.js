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
})