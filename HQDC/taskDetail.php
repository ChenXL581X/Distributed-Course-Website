<?php
require_once 'core/init.php';
include "includes/header.php";
$token = Token::generate();
$teacher = new teacher();
if(Input::exists('get')&&$teacher->data()->id)
{
      $id = Input::get('taskmark');
      $data = $teacher->_taskOperation->taskFindById($id);
      $title = $data[0]->title;
      $type = $data[0]->type;
      $start = $data[0]->start_time;
      $end = $data[0]->end_time;
      $desc = $data[0]->context;
      $files = $teacher->_taskOperation->taskFindTaskFiles($id);
?>
<link rel="stylesheet" type="text/css" href="css/taskDetail.css">
<script src="js/ajaxfileupload.js"></script>
<script src="js/taskdetail.js"></script>
<div class="main row">
	<div class="col-md-10 col-md-offset-1 row">
	<div class="col-md-8 col-md-offset-2 row padding">
		<div class="task">
			<input type="hidden" id="token" name="token" value="<?php echo $token; ?>">
			<input type="hidden" id="id" value="<?php echo $id; ?>">
			<input type="text" id="title" name="title" class="title"  value="<?php if(isset($title)) echo $title; ?>" disabled>
			<textarea class="context" name="desc" id="context" placeholder="" disabled>
<?php if(isset($desc)) echo $desc; ?>		
			</textarea>
			<div id="deadline" style="display:none">
				<label>截止时间</label>
				<div class="col-sm-3 deadline">
					<input type="date" name="endtime" id="endtime" value="<?php echo date("Y-m-d",$end); ?>">
				</div>
			</div>
			<label>作业附件</label>
			<div class="download"> 
			<?php   
			if(count($files))
			{
			?>
			<?php                   
				foreach ($files as $file) {
					?>
				<a class="" href="<?php echo $file->url; ?>" id="<?php echo "fl".$file->id; ?>">
					<i class="fa fa-download">
					</i> <?php echo $file->name; ?>
				</a>
				<span class='fileDel' style="display:none;" id="<?php echo $file->id; ?>">[删除]</span>
				<br>
                    <?php
                       }
            ?>
			<?php
			}
			?>
			<input id="fileToUpload" type="file" name="file" style="display:none;">
			</div>
			<div class="tool-box" id="uptask" style="display:none">
				<button class="btn btn-primary" id="uploadfile"><i class="fa fa-upload"></i> 确定</button>
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
				<a href="#" class="delete-task pull-right"><i class="fa fa-times"></i><span>删除此任务</span></a>
				<a href="#" class="edit pull-right" id="edit">编辑 <i class="fa fa-pencil"></i></a>
				<span class="pull-right">由<a href=""> <?php echo $teacher->data()->name; ?> </a>老师发起</span>
			</div>
		</div>
	</div>
	</div>
</div>
<?php
}
?>
<?php 
include "includes/footer.php";
?>