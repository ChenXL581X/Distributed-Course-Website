<?php
include 'includes/header.php';
$user = new User();
	
?>
<div class="main">
<?php 
if($user->isLoggedIn()){
	echo "登录成功";
}
?>

		<div class="center">
			<div class="units-row">
				<div class="unit-30" onclick="location='projects.php'">
					<i class="fa fa-th"></i>
					<h5>项目</h5>
					<i class="to-right fa fa-angle-right"></i>
					<p>管理或配置项目</p>
				</div>

				<div class="unit-30" onclick="location='newProject.php'">
					<i class="fa fa-plus"></i>
					<h5>新建</h5>
					<i class="to-right fa fa-angle-right"></i>	
					<p>导入.nessus文件并新建项目</p>
				</div>				
				<div class="unit-30" onclick="location='https://localhost:8834/nessus6.html' ">
				<i class="fa fa-repeat"></i>
				<h5>扫描</h5>
				<i class="to-right fa fa-angle-right"></i>
				<p>使用NESSUS对目标系统扫描</p></div>
			</div>
		</div>
</div>
<?php
include "includes/footer.php";
?>