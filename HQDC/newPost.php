<?php
	include "includes/header.php";
?>
<link rel="stylesheet" type="text/css" href="css/newPost.css">
<div class="main row">
		<div class="center">
			<i class="fa fa-edit fa-animate"></i>
			<h6>发起新帖子</h6>
			<p>填写以完成新建话题</p>
		</div>
	<div class="col-md-10 col-md-offset-1 row padding">
		

		<div class="new-post col-md-6 col-md-offset-3">
			<form>
			  <div class="form-group">
			    <label for="title">帖子标题或简介</label>
			    <input type="text" class="form-control" id="title" placeholder="标题">
			  </div>
			  
			  <div class="form-group">
			    <label for="context">帖子内容</label>
			    <textarea class="form-control" id="context" placeholder=""></textarea>
			  </div>
			  <div class="form-group ">
			    <label for="exampleInputFile">添加图片</label>
			    <div class="img-box">
			    	<img src="images/portraits/hp17.jpg">
			    </div>
			    <div class="tools-droparea">
			    <div class="tools-droparea-placeholder">
			    	上传图片<input placeholder="拖拽文件以上传" id="file" type="file" tabindex="5" name="file" data-tools="upload" data-url="upload.php">
			    	</div>
			    </div>
			    
			  </div>
			 	<div class="clear-both"></div>
		

			  <div class="center">
			  	
			  	<button type="submit" class="btn btn-default">发帖</button>
			  </div>
			  
			</form>	
		</div>
		
	</div>


</div>

<script src="js/newPost.js"></script>

<?php
	include "includes/footer.php"
?>