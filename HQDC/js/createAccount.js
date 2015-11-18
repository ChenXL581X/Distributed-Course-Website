(function(){
	$.fn.doAjax = function(){
		
		$this.click(function(){
			$this.preventDefault();
			$.ajaxFileUpload
			(
			    {
			        url: '../../XXXX/XXXX.aspx', //用于文件上传的服务器端请求地址
			        secureuri: false,           //一般设置为false
			        fileElementId: $("input#xxx").attr("id"), //文件上传控件的id属性  <input type="file" id="file" name="file" /> 注意，这里一定要有name值   
			                                                //$("form").serialize(),表单序列化。指把所有元素的ID，NAME 等全部发过去
			        dataType: 'json',//返回值类型 一般设置为json
			        complete: function () {//只要完成即执行，最后执行
			        },
			        success: function (data, status)  //服务器成功响应处理函数
			        {            
			        if (typeof (data.error) != 'undefined') {
			                        if (data.error != '') {

			               if (data.error == "1001") {//这个error（错误码）是由自己定义的，根据后台返回的json对象的键值而判断
			                    }else if (data.error == "1002") {
			                }
			                    alert(data.msg);//同error
			                    return;
			                } else {
			                    alert(data.msg);
			                }
			            }            /*                *    这里就是做一些其他操作，比如把图片显示到某控件中去之类的。                */
			        },
			        error: function (data, status, e)//服务器响应失败处理函数
			        {
			            alert(e);
			        }
			    }
			)
		
	};
	$("#fromExcel").doAjax();

			 	
})();