$(document).ready(function(){ 
	$('#defined_password').hide();
//	alert("hello");
	$('#fromhand').click(function() {	
		var username = $('#username').val();
		var name= $('#name').val();
		var password = $('#password').val();
		var password_confirm = $('#password_confirm').val();
		var group = $('#group').val();

		if(username == '' || password == '') {
			alert("用户名和密码不能为空");
		}
		else {
			if(password == password_confirm) {
				$.ajax({
					url: "createAccount_run.php",
					data: {
						type:'fromhand',
						username:username,
						name:name,
						password:password,
						group:group
					},
					type : "POST",
					
					success : function(result) {
						result = JSON.parse(result);
						console.log(result);
						if(result.state == 'failed') {
							alert(result.context);
							if(result.stateNum == '102') {
								$('#username').val("");
							}
							if(result.stateNum == '103') {
								location.reload();
							}
						}
						else {
							alert(result.context);
							location.reload(); 
						}
					}
				});
			}
			else {
				alert("确认密码不匹配");
				$('#password').val("");
				$('#password_confirm').val("");
			}
		}
	});

	$("#exportExcelModel").click(function() {
//		$.ajax({
//			url: "createAccount_run.php",
//			data: {
//				type:'exportExcelModel',
//			},
//			type : "POST",
//			
//			success : function(result) {
//				console.log(result);
//			}
//		});
		window.location.href="./createAccount_run.php? type=exportExcelModel"; 
	}); 
	$(":radio").click(function() {
		if($("#radio_password:checked").val() == 'user_defined') {
			$('#defined_password').show();
		}
		if($("#radio_password:checked").val() == 'default_password') {
			$('#defined_password').hide();
		}
	});

	$('#fromExcel').click(function() {
		var file = $("#file_stu");
        if($.trim(file.val())==''){
               alert("请先选择文件");
               return false;
        }
        else {
        	var formData = new FormData($("#form")[0]);
        	var passwordType = $("#radio_password:checked").val();
        	formData.append('type','fromExcel');
        	formData.append('passwordType',passwordType);
        	if(passwordType == 'user_defined') {
        		formData.append('defined_password',$("#defined_password").val());
        	}
        	 $.ajax({
                 url: './createAccount_run.php' ,
                 type: 'POST',
                 data: formData,
                 async: false,
                 cache: false,
                 contentType: false,
                 processData: false,
                 success: function (result) {
                	 result = JSON.parse(result);
                	 alert(result.state);
                	 console.log(result);
                	 if(result.state == 'success') {
                		 alert(result);
                		 $("#message").append("<p>导入成功"+result.successNum+"条。</p>");
                		 $("#message").append("<p>导入失败"+result.failedNum+"条.</p>");
                		 if(result.failedNum != 0) {
                			 $.each(result.message, function(name,value) {
                				 $("#message").append("<p>" + name + " " +value + "</p>");
                			 });
                		 }
                	 }
                	 else if(result.state == 'failed') {
                		 alert(result.message);
                	 }
                 },
                 error: function (result) {
                     alert(result);
                 }
            });
        }
        
	});
});

