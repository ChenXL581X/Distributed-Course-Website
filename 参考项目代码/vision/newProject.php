<?php
include "includes/header.php"
?>
<link rel="stylesheet" type="text/css" href="css/newProject.css">
<div class="main">
	<div class="logo">
		<i class="fa fa-folder-open-o"></i>
		<h4>新建项目</h4>
		<p>填写以完成新建项目</p>
		<div class="formbox">
			<form method="post" action="" class="forms info_change">
				<label>
			        <p>项目名</p>
			        <input type="text" name="user-name" placeholder="项目名" class="width-100"  />
			    </label>			    
			    <div class="units-row">
					<label class="unit-50">
				        <p>电子邮箱</p>
				        <input type="email" name="user-email" placeholder="电子邮箱" class="width-100" />
				    </label>
				    <label class="unit-50">
				        <p>联系电话 </p>
				        <input type="text" name="user-name" placeholder="联系电话" class="width-100"  />
				    </label>
			    </div>
			    
			    <label for="text">
			        <p>项目描述</p>
			        <textarea rows="4" class="width-100" placeholder="项目简介"></textarea>
			    </label>
			    <p>
			        <button class="btn-red">提交</button>
			        
			    </p>
			</form>	
		</div>	
	</div>
</div>
<?php
include "includes/footer.php"
?>