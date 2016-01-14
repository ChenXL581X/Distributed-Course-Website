<?php
include "includes/header.php";

$post = new Post();
$post = $post->findLimitOrder('0,10','release_time','DESC');

if($post) $postData = $post->data();

?>
<link rel="stylesheet" type="text/css" href="css/forum.css">
<div class="main">
	<div class="row show-grid">
      <div class="col-md-7 col-md-offset-1">
      	<div class="tools">
      		<button class="btn btn-success">
      			<i class="fa fa-refresh"></i>
      			刷新
      		</button>
      		<button class="btn btn-smaller btn-primary new">
	      		<i class="fa fa-plus"></i>
	      		<span>发帖</span>
	      	</button>
      		
			
      		<div class="btn-group" role="group" aria-label="...">
			  <button type="button" class="btn btn-default">学生发帖</button>
			  <button type="button" class="btn btn-default">教师发帖</button>
			  <button type="button" class="btn btn-default">全部</button>
			</div>	
			<div class="input-group forum-search">
			      <i class="fa fa-search"></i>
			      <input type="text" class="form-control input-sm" placeholder="搜索帖子" aria-describedby="basic-addon1">
			</div>
      	</div>
      	
		<h6>今日有<span>12</span>个新话题
			
		</h6>
      	<table class="table forum-table">
		<tbody>
			
			
		<?php 
			if($postData)foreach ($postData as $key => $value) {
				$sender = $user->find($value->release_people)->data()->name;
				$senderPortrait = $user->find($value->release_people)->data()->portraits;
				//var_dump($value->imgs);
				if($value->imgs!=''){
					$imgArray = explode("|", $value->imgs);
				}else{
					$imgArray = false;
				}


			

		?>
			<tr class="row">
				<td >
					<div class="col-md-2 forum-head-img ">
							
                            <img src=<?php echo Config::get('images/portraits').$senderPortrait;?>>
                            <div  class="clear-both"></div>
                            

                            <span class="teacher">师</span><a class="name"><?php echo $sender;?></a>
                             <div class="clear-both"></div>
                            <span class="reply-num">100</span>
                    </div>
                    
                    
                </td>
                
				<td class="col-md-10"><a class='title' href=<?php echo "post.php?postId=".$value->id;?>><?php echo $value->title?></a>
				<p><?php echo $value->context;?> </p>
				<div class="imgs">
					<ul>
						<li>
							<?php
							//var_dump($imgArray);
								if($imgArray)foreach ($imgArray as $key1 => $value1) {
									echo "<img src=".Config::get('images/post').$value1.">";
								}
							?>
					

						</li>
					</ul>
				</div>
				<div>
					
					<span class="pull-left"><?php echo $value->release_time;?></span>
					<span class="pull-right"><a href=<?php echo "deletePost.php?postId=".$value->id?>>删除本帖</a></span>
				</div>
				
				</td>
				
				
			</tr>
		<?php
			}
		?>
		</tbody>		
		</table>
		<div class="sk-spinner sk-spinner-rotating-plane"></div>
      </div>
      <div class="right col-md-3"  >
      	<div id="affix-right" class="affix">
      		
      	
	      	<div class="section">
	      	<a href="newPost.php" class="btn btn-smaller btn-default new">
	      		<i class="fa fa-plus"></i>
	      		<span>点此创建新话题</span>
	      	</a>	
	      	</div>
	      	<div class="section">
	      		<b>键入标题和内容以快速发帖</b>
	      		<form>
				  <input class="form-control" type="text" placeholder="输入标题" />
				  <textarea class="form-control" placeholder="输入内容"></textarea>
				  <button type="submit" class="btn btn-default pull-left">

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
<script type="text/javascript" src="js/forum.js"></script>
<?php
include "includes/footer.php"
?>