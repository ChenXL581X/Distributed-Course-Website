<?php
include 'includes/header.php';
?>
<div class="main row">
	<div class="col-md-8 col-md-offset-2">
	
	<div id="courseIntroduce" class="">
	<h1>课程简介</h1>
	<?php 
	   $courseInfo = new CourseInfo();
	   echo $courseInfo->getCourseIntroduce();
	?>
	</div>
	
	<div id="teachingEnvironment" class=""> 
	<h1>教学环境</h1>
	<?php 
	   echo $courseInfo->getTeachingEnvironment();
	?>
	</div>
	
	
	</div>
</div>
<?php
include "includes/footer.php";
?>