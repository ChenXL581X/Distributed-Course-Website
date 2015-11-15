<?php
include "includes/header.php";
$user = new User();
$postTable = new PostTable();
$post = new Post($postTable);
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
      			鍒锋柊
      		</button>
      		<button class="btn btn-smaller btn-primary new">
	      		<i class="fa fa-plus"></i>
	      		<span>鍙戝笘</span>
	      	</button>
      		
			
      		<div class="btn-group" role="group" aria-label="...">
			  <button type="button" class="btn btn-default">瀛︾敓鍙戝笘</button>
			  <button type="button" class="btn btn-default">鏁欏笀鍙戝笘</button>
			  <button type="button" class="btn btn-default">鍏ㄩ儴</button>
			</div>	
			<div class="input-group forum-search">
			      <i class="fa fa-search"></i>
			      <input type="text" class="form-control input-sm" placeholder="鎼滅储甯栧瓙" aria-describedby="basic-addon1">
			</div>
      	</div>
      	
		<h6>浠婃棩鏈�<span>12</span>涓柊璇濋
			
		</h6>
      	<table class="table forum-table">
		<tbody>
			
		</tbody>	
			<tr class="row">
				<td >
					<div class="col-md-2 forum-head-img ">
                            <img src="images/portraits/hp1.jpg">
                            <div class="clear-both"></div>
                            

                            <span class="teacher">甯�</span><a class="name">椹攼</a>
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
					
					<span class="pull-left">鏄ㄦ棩 20:23</span>
				</div>
				
				</td>
				
				
			</tr>
			<tr class="row">
				<td >
					<div class="col-md-2 forum-head-img ">
                            <img src="images/portraits/hp3.jpg">
                            <div class="clear-both"></div>
                            <span class="student">瀛�</span><a class="name">闄堟檽纾�</a>
                            <span class="reply-num">50</span>
                    </div>
                    
                    
                </td>
				
				<td class="col-md-8"><a class='title' href="#">鍒嗗竷寮忕郴缁熼鍩熸湁鍝簺缁忓吀璁烘枃锛�</a>
				<p>鍒嗗竷寮忕郴缁熸槸涓�涓緢澶х殑棰嗗煙锛岄噷闈㈠寘鍚緢澶氭柟鍚戙�傛棦鐒朵綘閮借璇籶aper浜嗭紝搴旇涔熸湁涓�瀹氬熀纭�浜嗐�備紛鍒╄浼婂ぇ瀛︾殑Advanced Distributed Systems 閲屾妸鍚勪釜鏂瑰悜閲嶈papers...</p>
				<div class="imgs">
					<ul>
						<li><img src="images/portraits/hp10.jpg"></li>
						<li><img src="images/portraits/hp12.jpg"></li>
					</ul>
				</div>
				<div>
					<span class="pull-left">浠婃棩 18:49</span>
					
				</div>
				
				</td>
			</tr>			
		</table>
		<div class="sk-spinner sk-spinner-rotating-plane"></div>
      </div>
      <div class="right col-md-3"  >
      	<div id="affix-right" class="affix">
      		
      	
	      	<div class="section">
	      	<button class="btn btn-smaller btn-default new">
	      		<i class="fa fa-plus"></i>
	      		<span>鐐规鍒涘缓鏂拌瘽棰�</span>
	      	</button>	
	      	</div>
	      	<div class="section">
	      		<b>閿叆鏍囬鍜屽唴瀹逛互蹇�熷彂甯�</b>
	      		<form>
				  <input class="form-control" type="text" placeholder="杈撳叆鏍囬" />
				  <textarea class="form-control" placeholder="杈撳叆鍐呭"></textarea>
				  <button type="submit" class="btn btn-default pull-left">

				  鍙戣捣鏂拌瘽棰�
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