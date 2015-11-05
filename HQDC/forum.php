<?php
include "includes/header.php"
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
			  <button type="button" class="btn btn-default">发帖时间</button>
			  
			  <button type="button" class="btn btn-default">回帖数</button>
			</div>
      		<div class="btn-group" role="group" aria-label="...">
			  <button type="button" class="btn btn-default">学生发帖</button>
			  <button type="button" class="btn btn-default">教师发帖</button>
			  <button type="button" class="btn btn-default">全部</button>
			</div>			
      	</div>
		<h6>今日有<span>12</span>个新话题</h5>
      	<table class="table forum-table">
		<tbody>
			
		</tbody>	
			<tr class="row">
				<td >
					<div class="col-md-2 forum-head-img ">
                            <img src="images/portraits/hp1.jpg">
                            <div class="clear-both"></div>
                            <span class="teacher">师</span><a class="name">马锐</a>
                    </div>
                    
                    
                </td>

				<td class="col-md-8"><a class='title' href="#">【音乐疯】要刷经验的来这里！！！！刷刷刷刷！！</a>
				<p>虽然已经不怎么关注电台了。。但还是会看看派台时间啥的。。也方便知道什么歌... </p>
				<div class="imgs">
					<ul>
						<li><img src="images/forum/0ff41bd5ad6eddc43bb8e6873fdbb6fd5266336a.jpg"></li>
					</ul>
				</div>
				</td>
				<td class="col-md-2">
					<span class="pull-right">今日 18:49</span><br>
					<span class="pull-right">昨日 20:23</span>
				</td>
				<td class="col-md-1">100</td>
				
			</tr>
			<tr class="row">
				<td >
					<div class="col-md-2 forum-head-img ">
                            <img src="images/portraits/hp3.jpg">
                            <div class="clear-both"></div>
                            <span class="student">学</span><a class="name">陈晓磊</a>
                    </div>
                    
                    
                </td>
				
				<td class="col-md-8"><a class='title' href="#">【音乐疯】耳熟能详的欧美歌曲"</a>
				<p>TOP 15: 5SOS FEELS THE POWER Capitol’s 5 Seconds of Summer will...</p>
				<div class="imgs">
					<ul>
						<li><img src="images/portraits/hp10.jpg"></li>
						<li><img src="images/portraits/hp12.jpg"></li>
					</ul>
				</div>
				</td>
				<td class="col-md-2">
					<span class="pull-right">2/3 18:49</span><br>
					<span class="pull-right">2/5 20:23</span>
				</td>
				<td class="col-md-1">100</td>
			</tr>			
		</table>
      </div>
      <div class="right col-md-3"  >
      	<div id="affix-right" class="affix">
      		
      	
	      	<div class="section">
	      	<button class="btn btn-smaller btn-default new">
	      		<i class="fa fa-plus"></i>
	      		<span>点此创建新话题</span>
	      	</button>	
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