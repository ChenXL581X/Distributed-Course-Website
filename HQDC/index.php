<?php
include 'includes/header.php';

	
?>
<link rel="stylesheet" type="text/css" href="css/index.css">
<div class="main row">


		<div class="center row col-md-10 col-md-offset-1">

			<div class="col-md-10 col-md-offset-1 row">
				<div class="progress">
				  <div class="progress-bar progress-bar-success progress-bar-striped" style="width: 35%">
				    <span class="">35% Complete (success)</span>
				  </div>
				  <div class="progress-bar progress-bar-warning progress-bar-striped active" style="width: 20%">
				    <span class="sr-only">20% Complete (warning)</span>
				  </div>
				  <div class="progress-bar progress-bar-danger progress-bar-striped" style="width: 10%">
				    <span class="sr-only">10% Complete (danger)</span>
				  </div>
				</div>
				<div class="col-md-4">
					<div class="small-box">
						<i class="fa fa-th"></i>
						<h5>项目</h5>
						<i class="to-right fa fa-angle-right"></i>
						<p>管理或配置项目</p>
					</div>
						
				</div>

				<div class="col-md-4 " onclick="location='newProject.php'">
					<div class="small-box">
						<i class="fa fa-plus"></i>
						<h5>新建</h5>
						<i class="to-right fa fa-angle-right"></i>	
						<p>导入.nessus文件并新建项目</p>
					</div>
						
				</div>				
				<div class="col-md-4 " onclick="location='https://localhost:8834/nessus6.html' ">
					<div class="small-box">
						<i class="fa fa-repeat"></i>
						<h5>扫描</h5>
						<i class="to-right fa fa-angle-right"></i>
						<p>使用NESSUS对目标系统扫描</p></div>
					</div>
					
			</div>
		</div>
</div>
<?php
include "includes/footer.php";
?>