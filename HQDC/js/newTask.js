$(document).ready(function(){
	$("#endtime").blur(function(){
		alert($(this).val());
		// checkEndTime($(this).val());
		alert(new Date())
	});
	function checkEndTime(startTime){  
	    var start=new Date(startTime.replace("-", "/").replace("-", "/"));  
	    var endtime=new Date();  
	    var end=endtime.getYear()+"/"+endtime.getMonth()+"/"+endtime.getDay();
	    if(end<start){  
	        return false;  
	    }  
	    return true;  
	};
})