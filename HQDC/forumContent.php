<?php
include "includes/header.php"
?>
<link rel="stylesheet" type="text/css" href="css/forumContent.css">
<div class="main row">
	<div class="row show-grid col-md-10 col-md-offset-1">
    	<div class="col-md-7 col-md-offset-1">
	    	<div class="content-head">
	    		<h1>想用 GO 写一个开源分布式数据处理相关的系统，并学习 GO，有什么建议？</h1>
	    		<p>陈晓磊在2015年3月3日11:00发起</p><span class="reply-num"><i class="fa fa-comment-o"></i>100回复</span>
	    		<span class="last-reply">最后回复：陈晓磊 2015年3月4日12:00</span>
	    	</div>
	    	<div class="content-box">
		    	
	    		<div class="content-body">
		    		<div class="head-box">
			    		<img src="images/portraits/hp3.jpg">
			    		<span class="type">楼主</span>
			    	</div>
					<a>陈晓磊</a> 
	    			<p>分布式系统是一个很大的领域，里面包含很多方向。既然你都要读paper了，应该也有一定基础了。伊利诺伊大学的Advanced Distributed Systems 里把各个方向重要papers</p>
					<div class="imgs">
						
							<img src="images/portraits/hp10.jpg">
							<img src="images/portraits/hp15.jpg">
						
					</div>
					<span>发布于 2015-10-26</span>
					<a href="#" class="pull-right"><span><i class="fa fa-comment-o"></i> 回复</span></a>
	    		</div>
	    		<div class="content-body">
	    			<div class="head-box">
			    		<img src="images/portraits/hp2.jpg">
			    		
			    	</div>
					<a>蔡建宇</a><span>回复</span><a href="#">陈晓磊</a> 
	    			<p>分布式系统在互联网时代，尤其是大数据时代到来之后，成为了每个程序员的必备技能之一。分布式系统从上个世纪80年代就开始有了不少出色的研究和论文，我在这里只列举最近15年范围以内我觉得有重大影响意义的15篇论文（15 within 15）。</p><p>
	    			1. The Google File System: 这是分布式文件系统领域划时代意义的论文，文中的多副本机制、控制流与数据流隔离和追加写模式等概念几乎成为了分布式文件系统领域的标准，其影响之深远通过其5000+的引用就可见一斑了，Apache Hadoop鼎鼎大名的HDFS就是GFS的模仿之作；</p><p>
	    			2. MapReduce: Simplified Data Processing on Large Clusters：这篇也是Google的大作，通过Map和Reduce两个操作，大大简化了分布式计算的复杂度，使得任何需要的程序员都可以编写分布式计算程序，其中使用到的技术值得我们好好学习：简约而不简单！Hadoop也根据这篇论文做了一个开源的MapReduce；</p><p>
	    			3. Bigtable: A Distributed Storage System for Structured Data：Google在NoSQL领域的分布式表格系统，LSM树的最好使用范例，广泛使用到了网页索引存储、YouTube数据管理等业务，Hadoop对应的开源系统叫HBase（我在前公司任职时也开发过一个相应的系统叫BladeCube，性能较HBase有数倍提升）；</p><p>
	    			4. The Chubby lock service for loosely-coupled distributed systems：Google的分布式锁服务，基于Paxos协议，这篇文章相比于前三篇可能知道的人就少了，但是其对应的开源系统zookeeper几乎是每个后端同学都接触过，其影响力其实不亚于前三篇；</p>
					<div class="imgs">
						
							
						
					</div>
					<span>发布于 2015-10-26</span>
					<a href="#" class="pull-right"><span><i class="fa fa-comment-o"></i> 回复</span></a>
	    		</div>
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
<script type="text/javascript" src="js/forum.js"></script>
<?php
include "includes/footer.php"
?>      