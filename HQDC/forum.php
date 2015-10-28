<?php
include "includes/header.php"
?>
<link rel="stylesheet" type="text/css" href="css/forum.css">
<div class="main">
	<div class="row show-grid">
      <div class="col-md-7 col-md-offset-1">
		<h6>今日有<span>12</span>个新话题</h5>
      	<table class="table forum-table">
		<tbody>
			
		</tbody>	
			<tr>
				<td>100</td>
				<td>this is a title</td>
				<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea c</td>
				<td>
					<a href="#">jack</a>
					<a href="#">john</a>
				</td>
				<td>
					<span>2015/2/4 18:49</span>
					<span>2015/2/5 20:23</span>
				</td>
			</tr>
		</table>
      </div>
      <div class="right col-md-3">
      	<a class="btn btn-smaller new">
      		<i class="fa fa-plus pull-left"></i>
      		<span>点此创建新话题</span>
      	</a>
      	<div class="section">
      	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.	
      	</div>
      	<div class="section">
      		<b>快速发帖</b>
      		<form>
			  <input class="form-control" type="text" placeholder="输入标题" />
			  <textarea class="form-control" placeholder="内容"></textarea>
			  <button type="submit" class="btn btn-primary pull-right">

			  <i class="fa fa-envelope"></i>
			  发帖</button>
			  <div class="clear-both"></div>
			</form>
      	</div>
      </div>
    </div>
</div>
<script type="text/javascript" src="js/forum.js"></script>
<?php
include "includes/footer.php"
?>