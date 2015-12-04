<?php
include "includes/header.php";
$post = new Post();
$postId = Input::get('postId');
$postData = $post->find($postId)->data();

$reply = new DBReply();
$reply = $reply->findWithPost($postId);
$replyData = false;
if($reply){
	$replyData = $reply->findWithPost($postId)->data();	
}


$sender = new User();
$senderData = $sender->find($postData->release_people)->data();

?>
<link rel="stylesheet" type="text/css" href="css/post.css">
<div class="main row">
	<div class="row show-grid col-md-10 col-md-offset-1">
    	<div class="col-md-7 col-md-offset-1">
	    	<div class="content-head">
	    		<h1><?php echo $postData->title;?></h1>
	    		<p><?php echo $senderData->name.'在'.$postData->release_time.'发起';?></p><span class="reply-num"><i class="fa fa-comment-o"></i>100回复</span>
	    		<span class="last-reply">最后回复：陈晓磊 2015年3月4日12:00</span>
	    	</div>
	    	<div class="content-box">
		    	
	    		<div class="content-body">
		    		<div class="head-box">
			    		<img src="images/portraits/hp3.jpg">
			    		<span class="type">楼主</span>
			    	</div>
					<a><?php echo $senderData->name;?></a> 
	    			<p><?php echo $postData->context;?></p>
					<div class="imgs">
					<div>
						<a class="show" href="#">展开图片</a>
					</div>

					<?php
						$imgArray = explode("|", $postData->imgs);
						
						foreach ($imgArray as $key1 => $value1) {
							echo "<img src=".Config::get('images/post').$value1.">";
						}
							
					?>	
						
					</div>
					<span><?php echo '发布于'.$postData->release_time;?></span>
					<a href="#" class="pull-right"><span><i class="fa fa-comment-o"></i> 回复</span></a>
	    		</div>

	    		<?php

	    			if($replyData){
	    				//var_dump($replyData);
	    				foreach ($replyData as $key => $value) {
	    				
	    				$sender = $user->find($value->sender)->data();
	    				$receiver = $user->find($value->receiver)->data();
	    		?>
	    		<div class="content-body">
	    			<div class="head-box">
			    		<?php echo "<img src=".Config::get('images/portraits').$sender->portraits.">";?>
						
			    	</div>
					<a><?php echo $sender->name;?></a><span>回复</span><a href="#"><?php echo $receiver->name;?></a> 
	    			<p> <?php echo $value->context;?> </p>
					<div class="imgs">
							
						
					</div>
					<span>发布于 <?php echo $value->reply_time;?></span>
					<a href="#" class="pull-right"><span><i class="fa fa-comment-o"></i> 回复</span></a>
	    		</div>
	    		<?php
	    			}}
	    		?>
	    	</div>
    		
    	</div>
    	<div class="right col-md-3"  >
	      	<div id="affix-right" class="affix">
	      		
	      	
		      	<div class="section">
		      	<button class="btn btn-smaller btn-success new">
		      		<i class="fa fa-plus"></i>
		      		点此创建新话题
		      	</button>	
		      	</div>
		      	<div class="section">
		      		<b>键入标题和内容以快速发帖</b>
		      		<form>
					  <input class="form-control" type="text" placeholder="输入标题" />
					  <textarea class="form-control" placeholder="输入内容"></textarea>
					  <button type="submit" class="btn btn-primary pull-left">

					  发起新话题
					  <i class="fa fa-arrow-right icon-arrow-right icon-on-right"></i>
					  </button>
					  <div class="clear-both"></div>
					</form>
		      	</div>
	      	</div>
      	</div>
    </div>
</div>
<script type="text/javascript" src="js/post.js"></script>
<?php
include "includes/footer.php"
?>      