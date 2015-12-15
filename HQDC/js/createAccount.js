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

	$(":radio").click(function() {
		if($("#radio_password:checked").val() == 'user_defined') {
			$('#defined_password').show();
		}
		if($("#radio_password:checked").val() == 'default_password') {
			$('#defined_password').hide();
		}
	});

	$('#fromExcel').click(function() {
		var file = $("#file");
        if($.trim(file.val())==''){
               alert("请先选择文件");
               return false;
        }
        else {
        	var formData = new FromData($('#form')[0]);
        	var passwordType = $("#radio_password:checked").val();
        	
        }
        
	});
});

