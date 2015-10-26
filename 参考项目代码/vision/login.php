<?php
include "includes/header.php";
require_once 'core/init.php';
$token = Token::generate();
?>
<link rel="stylesheet" type="text/css" href="css/login.css">
	<div id="main">
		

			<div class="log-reg-box width-25">
				
				<div class="logbox formbox">
				<h5>登录账号</h5>	
					<form method="post" action="login_run.php" class="forms">
					    <label>
					    	
					        <input type="text" name="username" placeholder="User" 
					        class="width-100" value="<?php echo escape(Input::get('username')); ?>"

					        />
					    </label>
					    <label>
					    	
					        <input type="password" name="password" placeholder="Password" class="width-100" />
					    </label>
					    <p >
					    <input type="checkbox"  id="remember" name="remember" />

					    <label  for="remember">记住密码</label>
					    <a id="forget" href="#">忘记密码？</a>
						</p>
						<input type="hidden" name="token" value="<?php echo $token; ?>">
					    <label>
					        <button class="btn btn-blue width-60">登录</button>
					    </label>
					    <label>
					    
					    <p>还没有账号？<a href="#" class="width-50" id="toreg">点击注册</a></p>
						</label>
					</form>			
				</div>

			
			
				<div class="regbox formbox">
					<h5>创建新账户</h5>
					<form method="post" action="register_run.php" class="forms">
					    <label>
					        <input type="text" name="userreg" value="<?php echo Input::get('userreg');?>"placeholder="Email" class="width-100" />
					    </label>
					    <label>
					        <input type="password" name="password_reg" placeholder="Password" class="width-100" />
					    </label>
					    <label>
							<input placeholder="确认密码" class="width-100" type="password" name="password_agan"  pattern=".{6,}" tabindex="5" title="请确认您的密码" required="">

					    </label>
					    <label>
					    	<input type="text" name="name" class="width-100" tabindex="4" value="<?php echo Input::get('name');?>" placeholder="姓名" title="请输入您的姓名" required="">
					    </label>
					    <input type="hidden" name="token" value="<?php echo $token; ?>">
					    <p>
					        <button class="btn btn-blue width-60">注册</button>
					    </p>
					    已有账号？<a href="#" id = "tolog">转到登录</a>
					</form>			
				</div>
			


		 	</div>
		</div>


	
  
    <script src="js/jquery.easing.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/login.js"></script>
	
<?php
include "includes/footer.php";
?>