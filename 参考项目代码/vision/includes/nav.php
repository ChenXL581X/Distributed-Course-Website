<?php
require_once 'core/init.php';
$user = new User();
?>
<header class="group menu-side">

		<nav class="navbar navbar-left ">
			<ul>
			<a href="#" class="menu-toggle"><i class="fa fa-list"></i></a>
				<li>
					<span style="width:50px;height:40px"></span>
				</li>

				<li>
					<a href="index.php" class="dropdown-toggle">
			            <i class="fa  fa-home"></i> 主页
			            
		          	</a>
	            </li>

				 <li>
					<a href="#" class="dropdown-toggle">
			            <i class="fa  fa-check-circle"></i> 开始
			            
		          	</a>
	            </li>
	            <li>
					<a href="#" class="dropdown-toggle">
			            <i class="fa fa-th-list"></i> 项目
			            <b class="caret"></b>
			        </a>
			            
			            <ul class="drop">
			            	<li><a href="projects.php">所有项目</a></li>
			            	<li><a href="newProject.php">新建项目</a></li>
			            </ul>

		          	
	            </li>
	            <li>
					<a href="#" class="dropdown-toggle">
			            <i class="fa  fa-folder-o"></i> Portfolios
			            <b class="caret"></b>
		          	</a>
	            </li>
	            <li>
					<a href="#" class="dropdown-toggle">
			            <i class="fa fa-file"></i> Subscription
			            <b class="caret"></b>
		          	</a>
	            </li>

			</ul>
		</nav>
		<nav class="navbar navbar-right">
			<ul>
				
					<?php
					if (!$user -> isLoggedIn()){
					?>
					<li>
					<a href="#" class="dropdown-toggle">
			            <i class="fa fa-user"></i> 用户
			            <b class="caret"></b>
		          	</a>
			            <ul class="drop">
			            	<li><a href="login.php">登录</a></li>
			            	<li><a>注册</a></li>
			            </ul>
			        </li>
			        <?php
					}else{
					?>
					<li class="head">

						<a href="#" class="dropdown-toggle">
							<?php echo escape($user->data()->name); ?>
							<img src="images/am.jpg">
							<b class="caret"></b>

						</a>
						<ul class="drop">
							<li><a href="logout.php">注销</a> 	  </li>
							<li><a href="info.php">个人信息</a>  </li>
							<li><a href="changepassword.php">更改密码</a>  </li>
			            </ul>
					</li>
					<?php
						}
					?>
		        
		        <li>
					<a href="#" class="dropdown-toggle">
			            <i class="fa fa-book"></i> 帮助
			            <b class="caret"></b>
		          	
		          	</a>	
			            <ul class="drop">
			            	<li><a>联系</a></li>
			            	<li><a>帮助</a></li>
			            </ul>		          	
		        </li>	
		        <li>
					<span style="width:30px;height:40px"></span>
				</li>          	
			</ul>
	</nav></header>