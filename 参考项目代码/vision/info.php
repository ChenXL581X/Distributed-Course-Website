<?php
include "includes/header.php";
?>
<link rel="stylesheet" type="text/css" href="css/info.css">
	<div id="main">
		<div class="setting">
			<i class="fa fa-gear"></i>
			<p>用户信息与设置</p>
		</div>
		<div class="infobox">
			<nav class="navbar nav-pills" data-tools="tabs" data-active="#tab11">
				<ul>
					<li><a href="#tab11">用户信息</a></li>
					<li><a href="#tab22">更改密码</a></li>
					<li><a href="#tab33">升级权限</a></li>
					<li><a href="#tab44">用户消息</a></li>
				</ul>
			</nav>
			 
			<div id="tab11" class="centerbox">
				<div class="head"><img src="images/am.jpg">
					<p>steve johnson</p>
					
					<a href="#">更换头像</a>
				</div>
				<form method="post" action="" class="forms info_change">
					<label>
				        <p>姓名 </p>
				        <input type="text" name="user-name" value="steve johnson" class="width-100"  />
				    </label>
				    <label>
				        <p>电子邮箱</p>
				        <input type="email" name="user-email" value="12345@gmail.com" class="width-100" />
				    </label>
				    <label>
				        <p>联系电话 </p>
				        <input type="text" name="user-name" value="86-12345678" class="width-100"  />
				    </label>
				    <label for="text">
				        <p>个人简介</p>
				        <textarea rows="4" class="width-100">我的简介；</textarea>
				    </label>
				    <p>
				        <button class="btn-red">保存修改</button>
				        
				    </p>
				</form>
			</div>
			<div id="tab22" class="centerbox">
				<form style="margin-top:30px" method="post" action="" class="forms">
					    <label>
					        <input type="email" name="user-email" placeholder="邮箱" value="12345.qq.com" disabled class="width-100" />
					    </label>
					    <label>
					        <input type="password" name="user-password" placeholder="原密码" class="width-100" />
					    </label>
					    <label>
					        <input type="password" name="user-password" placeholder="新密码" class="width-100" />
					    </label>
					    <label>
					        <input type="password" name="user-password" placeholder="确认新密码" class="width-100" />
					    </label>					    
					    <p>
					        <button class="btn-red width-40">提交</button>
					    </p>
					    
					</form>		
			</div>
			<div id="tab33" class="centerbox">3</div>
			<div id="tab44" class="centerbox">4</div>	
		</div>
	</div>


	
<?php
include "includes/footer.php";
?>