(function(){


	var file = $('#fileUpload');
	var showimg = $('.img-box');
	var files = $(".files");

	file.wrap("<form id='myupload' action='action.php' method='post' enctype='multipart/form-data'></form>");
    file.change(function(){
		$("#myupload").ajaxSubmit({
			url: './action.php',
			dataType:  'json',
			beforeSend: function() {
        		
				
        		var percentVal = '0%';
        	
        		$.showProgress();
				
    		},
    		uploadProgress: function(event, position, total, percentComplete) {
        		var percentVal = percentComplete + '%';
        	
        		$.updateProgress(percentVal);
    		},
			success: function(data) {
				
				files.html("<b>"+data.name+"("+data.size+"k)</b> <span class='delimg' rel='"+data.pic+"'>删除</span>");
				//console.log(data);
				var img = $('<img/>',{
					src : data.pic_path,
					ref : data.pic
					});

				showimg.append(img);
				$.hideProgress();
				
			},
			error: function(xhr){
//		alert(xhr);
				
				bar.width('0')
				files.html(xhr.responseText);
			}
		});
	});

    $("#submit").click(function(e){
		e.preventDefault();
		var title = $('#title').val(),
			context = $('#context').val(),
			imgs = [];
		$('.img-box img').each(function(){
			var src = $(this).attr('ref');
			imgs.push(src);
		});

		var data = {
			title : title,
			context : context,
			imgs : imgs

		};
		$.ajax({
			url: 'newPost_run.php',
			type: "POST",
			data: {data:data},
			success: function(data){
				if(data == 'noLogin'){
					alert('请先登录');
				}else if(data == 'empty'){
					alert('不能为空');
				}else if(data == "success"){
					alert('发帖成功');
				}
				console.log(data);
				//location='forum.php';

			}
		});

	});

	$(".delimg").live('click',function(){
		var pic = $(this).attr("rel");
		$.post("action.php?act=delimg",{imagename:pic},function(msg){
			if(msg==1){
				files.html("删除成功.");
				showimg.empty();
				progress.hide();
//				$("form").replaceWith("<input id='fileupload' type='file' name='mypic'>");
				 window.location.reload();
			}else{
				alert(msg);
			}
		});
	});



})();