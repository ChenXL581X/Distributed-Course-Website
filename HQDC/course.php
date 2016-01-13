<?php 
require_once 'core/init.php';
include "includes/header.php";
$token = Token::generate();
if($role == 'teacher')
{
	$user = new Teacher();
	$data = $user->taskFindAll();
	$name = $user->data()->name;
}
else
{
	$user = new User();
	$data = $user->taskFindAll();
}
?>
		<link rel="stylesheet" type="text/css" href="css/timeline/default.css" />
		<link rel="stylesheet" type="text/css" href="css/timeline/component.css" />
		<link rel="stylesheet" type="text/css" href="css/course.css">
	
		<div class="row main-box">
			<div class="col-md-8 ">	

				
				<div class="main ">
				<h3>
					<i class="fa fa-list"></i> 本学期课程教学安排<a href="#" class="pull-right"><i class="fa fa-refresh"></i> </a>
				 	<?php
				 	if($role=='teacher')
				 	{
				 		?>
				 	<span class="new-task"><a href="newtask.php"><i class="fa fa-plus"></i> 新建课程或作业</a></span>
					<?php } ?>
				</h3>


					<ul class="cbp_tmtimeline">
						<?php 
						for ($i=0; $i < count($data); $i++) {
							$stamp=(int)$data[$i]->start_time;
						?>
						<li> 
							<time class="cbp_tmtime" datetime="<?php echo date("Y-m-d H:i",$stamp); ?>">
								<span><?php echo date("d/m/y",$stamp); ?></span>
								<span><?php echo date("H:i",$stamp); ?></span>
							</time>
							<div class="cbp_tmicon cbp_tmicon-phone"></div>
							<div class="cbp_tmlabel">
						      <h6>
						            <?php
						            if($data[$i]->type==='H')
						            echo "作业：";
						        	else echo "实验："
						            ?>
						            <?php 
						            echo $data[$i]->title; 
						            ?>
						        <input type="hidden" class="taskid" name="taskid" value="<?php echo $data[$i]->id; ?>">

								<a href="#" class="showContext pull-right"><i class="fa fa-arrow-down"></i><span>展开</span></a>
								<?php
								if($role=='teacher')
								{
									?>
								<a href="#" class="delete-task pull-right"><i class="fa fa-times"></i><span>删除此任务</span></a>
								<?php }?>
								</h6>
						      	<div class="context">
						      		<p><?php echo $data[$i]->context; ?>
						      		</p>	
						      	</div>
				      	      	<?php
				      	      		$files = $user->taskFindTaskFiles($data[$i]->id);
				      	      		if($files)
				      	      		{
				      	      			?>
				      	      			<div class="download">
				      	      				<?php
				      	      			foreach ($files as $file) {
				      	      	?>
				      	      	<a class="" target="_blank" href="<?php echo $file->url; ?>"><i class="fa fa-download"></i> <?php echo $file->name; ?></a><br />
				      	      	<?php
				      	      		}
				      	      	?>
								</div>
								<?php } ?>
								<div class="operate tool-box">
								<label>该实验已完成</label>
								<div class="progress">
								  
								  <div class="progress-bar progress-bar-success progress-bar-striped " style="width: 100%">
								    
								  </div>
								  
								</div>

									<button class="btn btn-default"><i class="fa fa-search"></i> 查看已提交附件</button>
									<button class="btn btn-default"><i class="fa fa-search"></i> 查看评分</button>
								</div>
								
								<div class="info">
									<span>截止时间:<?php echo date("d/m H:i",$data[$i]->end_time); ?></span>
									<?php
									if($role=='teacher')
									{
										?>
									<a href="<?php echo 'taskdetail.php?taskmark='.$data[$i]->id; ?>" class="edit pull-right">编辑 <i class="fa fa-pencil"></i></a>
									<?php }?>
									<span class="pull-right">由<a href=""><?php echo $user->findCreateMan($data[$i]->teacher_id); ?></a>老师发起</span>
								</div>

							</div>
						  </li>
						<?php
						}
						?>
						<li>
							<div class="cbp_tmicon cbp_tmicon-last">
								<i class="fa fa-angle-double-down fa-animate"></i>
							</div>
							
						</li>
						
					</ul>
				</div>
			</div>
			<div class="col-md-3">
				<div class="notice-box notice">
					<div class="panel panel-default">
					  <div class="panel-heading">最近通知</div>
					  <div class="panel-body">
					    <ul>
					    	<li>
					    		<a href="#" target="_blank">各位领导，各位老师，关于学院国庆、中秋假期放假安全稳定工作的...</a>
					    		<p>2015年3月3日11:00 <a href="#">马锐</a></p>
					    	</li>
					    	<li>
					    		<a href="#" target="_blank">请各位同学将作业发到以下邮箱...</a>
					    		<p>2015年3月3日11:00 <a href="#">马锐</a></p>
					    	</li>
					    </ul>
					  </div>
					</div>

					
				</div>
				<div class="notice-box  state">
					

					<div class="panel panel-default">
					  <div class="panel-heading">最新动态</div>
					  <div class="panel-body">
					    <ul>
					    	<li>
					    		<a href="#" target="_blank">各位领导，各位老师，关于学院国庆、中秋假期放假安全稳定工作的...</a>
					    		<p>2015年3月3日11:00 <a href="#">马锐</a></p>
					    	</li>
					    </ul>
					  </div>
					</div>
				</div>
			</div>	
		</div>
		<script src="js/course.js"></script>
<?php 
include "includes/footer.php"
?>
