<?php
include 'includes/header.php';
$user = new User();

?>
<link rel="stylesheet" type="text/css" href="css/admin.css">
<div class="main">
	
		<div class="left info">
			<div class="login-layout">
				
			
				<div class="login-img">
					<img src="images/portraits/hp3.jpg">
					<p>蔡建宇</p>
				</div>

				<form method="POST" action="" id="login">
					<fieldset>
						<label>
							<span class="block input-icon input-icon-right">
								<input type="text" name="username" class="span12" placeholder="用户名">
								<i class="fa fa-user icon-user"></i>
							</span>
						</label>

						<label>
							<span class="block input-icon input-icon-right">
								<input type="password" name="password" class="span12" placeholder="密码">
								<i class="fa fa-lock icon-lock"></i>
							</span>
						</label>

						<div class="space"></div>
						
						<div class="clearfix text-left">
							<label class="inline">
								<input type="checkbox">
								<span class="lbl"> 记住密码</span>
							</label>
							<input type="hidden" name="token" value="c95ab5d475c48afaee64eaeff08328a2">
							<button class="login-button width-35 pull-right btn-primary  btn btn-small">
								<i class="fa fa-key icon-key"></i>
								登录
							</button>
						</div>
						

						<div class="space-4"></div>
					</fieldset>
				</form>
				<div class="nav-box">
					<ul>
						<li><a href="#"><i class="fa fa-user"></i>个人信息</a></li>
						<li><a href="#"><i class="fa fa-lock"></i>安全设置</a></li>
						<li><a href="#"><i class="fa fa-file-o"></i>作业实验</a></li>
						<li><a href="#"><i class="fa fa-bell-o"></i>消息</a></li>
					</ul>
				</div>
			</div>
			
		</div>
		<div class="right content row">
			<div class="col-md-8 col-md-offset-3">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</div>

	
</div>

<script src="js/admin.js"></script>
<?php if($user->isLoggedIn()){?>
	<script type="text/javascript">
		
			
		
	</script>
<?php 
}
include 'includes/footer.php';
?>