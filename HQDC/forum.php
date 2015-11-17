<?php
include "includes/header.php";
$user = new User();
$post = new Post();
$post = $post->find(1);
$postData = $post->data();

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
			
		</tbody>	
			<tr class="row">
				<td >
					<div class="col-md-2 forum-head-img ">
                            <img src="images/portraits/hp1.jpg">
                            <div class="clear-both"></div>
                            

                            <span class="teacher">师</span><a class="name">马锐</a>
                             <div class="clear-both"></div>
                            <span class="reply-num">100</span>
                    </div>
                    
                    
                </td>
                
				<td class="col-md-10"><a class='title' href="forumContent.php"><?php echo $postData->title?></a>
				<p><?php echo $postData->context;?> </p>
				<div class="imgs">
					<ul>
						<li><img src="images/forum/0ff41bd5ad6eddc43bb8e6873fdbb6fd5266336a.jpg"></li>
					</ul>
				</div>
				<div>
					
					<span class="pull-left">昨日 20:23</span>
				</div>
				
				</td>
				
				
			</tr>
			<tr class="row">
				<td >
					<div class="col-md-2 forum-head-img ">
                            <img src="images/portraits/hp3.jpg">
                            <div class="clear-both"></div>
                            <span class="student">学</span><a class="name">陈晓磊</a>
                            <span class="reply-num">50</span>
                    </div>
                    
                    
                </td>
				
				<td class="col-md-8"><a class='title' href="#">分布式系统领域有哪些经典论文？</a>
				<p>分布式系统是一个很大的领域，里面包含很多方向。既然你都要读paper了，应该也有一定基础了。伊利诺伊大学的Advanced Distributed Systems 里把各个方向重要papers...</p>
				<div class="imgs">
					<ul>
						<li><img src="images/portraits/hp10.jpg"></li>
						<li><img src="images/portraits/hp12.jpg"></li>
					</ul>
				</div>
				<div>
					<span class="pull-left">今日 18:49</span>
					
				</div>
				
				</td>
			</tr>			
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