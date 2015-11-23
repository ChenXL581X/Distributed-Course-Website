<?php
include "includes/header.php";
?>
<link rel="stylesheet" type="text/css" href="css/table/component.css">
<link rel="stylesheet" type="text/css" href="css/workScore.css">

<div class="main row">
	<div class="intro col-md-8 col-md-offset-2">
		<i class="fa fa-pencil fa-animate"></i>
		<h4>第三次作业评分</h4>
		<p>请在查看学生提交的<b>文件</b>后仔细评分并<b>保存</b>，或<a href="course.php">点此</a>返回<b>课程页面</b></p>
		<a class="save btn btn-primary"><i class="fa fa-check"></i> 保存修改</a>
		<a href="#"class="btn btn-default"><i class="fa fa-search"></i> 查看作业内容</a>
	</div>
	<div class="table-box col-md-8 col-md-offset-2">	
		<table>
			<thead>
				<tr>
					<th>学号</th>
					<th>姓名</th>
					<th>作业文件</th>
					<th>评分</th>
				</tr>
			</thead>
				<tr>
					<td>2220150544</td>
					<td>蔡建宇</td>
					<td><a href="#">1120112038_蔡建宇.zip</a></td>
					<td> <input class="score" type="text" value="80"></td>
					
				</tr>	
				
			<tbody>
			</tbody>
		</table>
	</div>
</div>
<script src="js/jquery.ba-throttle-debounce.min.js"></script>
<script src="js/jquery.stickyheader.js"></script>
<?php
include "includes/footer.php";
?>
