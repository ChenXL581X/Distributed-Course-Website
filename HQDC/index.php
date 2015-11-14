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
						<h5>简介</h5>
						<i class="to-right fa fa-angle-right"></i>
						<p>教师团队和课程简介</p>
					</div>
						
				</div>

				<div class="col-md-4 " onclick="location='.php'">
					<div class="small-box">
						<i class="fa fa-plus"></i>
						<h5>课程</h5>
						<i class="to-right fa fa-angle-right"></i>	
						<p>查看课程资料，教师可添加资料</p>
					</div>
						
				</div>				
				<div class="col-md-4 " onclick="location='contact.php'">
					<div class="small-box">
						<i class="fa fa-envelope"></i>
						<h5>联系</h5>
						<i class="to-right fa fa-angle-right"></i>
						<p>联系我们,获取帮助</p></div>
					</div>
					
			</div>
		</div>
</div>
<?php
include "includes/footer.php";
?>