<?php 
include "includes/header.php";
?>
<link rel="stylesheet" type="text/css" href="css/taskDetail.css">
<div class="main row">
	<div class="col-md-10 col-md-offset-1 row">
	<div class="col-md-8 col-md-offset-2 row padding">
		<div class="task">
			<input type="text" class="title"  value="作业1" disabled>
			<textarea class="context" id="context" placeholder="" disabled>
Update：原问题还请教了有哪些开源项目可以参与实践，这个我了解不多，请有需要的看其它人的回答。 1. Distributed-systems-readings这个网址里收集了一堆美帝各TOP大学分布式相关的课程，我就是从这找到MIT的那门课的。 2. Paxos算法要问为啥单独把这个算法

			</textarea>
			<label>作业附件</label>
			<div class="download">
				<a class="" onclick=""><i class="fa fa-download"></i> 模拟器实验提交（11月22日前） 作业.pdf</a><br>
				<a class="" onclick=""><i class="fa fa-download"></i> 模拟器实验提交（11月22日前） 作业.pdf</a>	
			</div>
			
			<div class="operate tool-box">
			<label>已有20%同学提交作业</label>
			<div class="progress">
			  
			  <div class="progress-bar progress-bar-info progress-bar-striped active" style="width: 20%">
			    <span class="sr-only">已有20%同学提交作业</span>
			  </div>
			  
			</div>
			<div class="files">
				<label>你尚未提交作业</label>

			</div>

				<button class="btn btn-primary"><i class="fa fa-upload"></i> 提交作业</button>
				<button onclick="location='workScore.php?taskId=1'" class="btn btn-default"><i class="fa fa-pencil"></i> 为学生评分</button> 
			</div>
			<div class="info">
				
				<span>截止时间:11/16 12:00</span>
				<a href="#" class="edit pull-right">编辑 <i class="fa fa-pencil"></i></a>
				<span class="pull-right">由<a href=""> 马锐 </a>老师发起</span>
			</div>
		</div>
	</div>
	</div>
</div>
<?php 
include "includes/footer.php";
?>