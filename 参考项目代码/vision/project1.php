
<?php
include 'includes/header.php'
?>
	<link rel="stylesheet" type="text/css" href="css/project.css">
	<div id="main">
		
		<h1>管理项目</h1>
		<div class="units-row">
			
		    <div class="unit-30">

		    	<div class="project-manage unit-100">
		    		<ul >
					    <li class="underline">
					      项目管理
					    </li>
					      <li ><a href="#"><i class="fa fa-plus"></i> 新增项目</a></li>
					    <li class="active"><a href="#"><i class="fa fa-eye"></i> 浏览项目</a></li>
					    <li class="divider"></li>
					    <li class="underline">
					      项目组
					    </li>
					    <li ><a href="#"><i class="fa fa-group"></i> 新增项目组</a></li>
					    <li ><a href="#"><i class="fa fa-file-text-o"></i> 查看项目组</a></li>
					
					</ul>
		    		<button class="btn btn-blue" style="margin-left:50px;" onclick="$.progress.show();">Show Progress</button>
		    	</div>

		    	
		    </div>
		    <div class="unit-70">
		    	<h4>所有项目</h4>
		    	<div class="units-row search" >
		    		<form action="" class="forms unit-70">
					    <div class="input-groups width-70">
					        <input type="text" name="go" placeholder="Search" />
					        <span class="btn-append">
					            <button class="btn btn-blue">Search</button>
					        </span>
					    </div>
					</form>
					<p class="btn-group btn-tools unit-20" data-tools="buttons" >
					    <button class="btn btn-tool btn-active" value="1"><i class="fa fa-th-large"></i></button>
					    <button class="btn btn-tool" value="0"><i class="fa fa-th-list"></i></button>
					</p>

		    	</div>

		    	
		    	<div class="units-row">
		    	<div class="units-row operate">
		    		<input type="checkbox" data-tools="check-all" data-classname="ch" data-parent="li" id="ch-all" />
        			<label for="ch-all">全选</label>
				<button class="btn btn-red">删除全部</button>
				<button class="btn btn-red">删除选中</button>
		    	</div>
				  <div class="card company-project-card unit-20"  data-color="#E2FFE5" style="background-color: #E2FFE5;">
					    
					
					<div class="check"><input type="checkbox" class="ch" id="foo-1" /></div>
				     <div class="card-actions">
				        <a href="#" class=""><i class="fa fa-pencil"></i></a>
				        <a href="#" class="delete_company_project" data-confirm="确定删除?" data-method="delete" rel="nofollow"><i class="fa fa-trash-o"></i></a>
				    </div>
				    <div class="date">2015-1-1</div>
				    <div class="card-inner" id="show-modal" data-tools="modal" data-width="700" data-title="Modal Header" data-content="modal/modal.html"data-company-project="f5654450-91b1-11e4-8380-f23c91ae92da">


				    <div class="title-bloc" id="title-bloc">
				        <span>Project IT01</span>
				      </div>
				      
				      <div class="project-details" id="project-details">
				        <div class="desc-bloc dark">
				          工程是科学和数学的某种应用，通过这一应用，使自然界的物质和能源的特性能够通过各种结构、机器、产品、系统和过程，是以最短的时间和精而少的人力做出高效、可靠且对人类有用的东西。将自然科学的理论应用到具体工农业生产部门中形成的各学科的总称。
				        </div>
				      </div>
				      
				    </div>
				  </div>
				  <div class="card company-project-card unit-20" data-color="#E5E6FF" style="background-color: #E5E6FF;">
				   	<div class="check"><input type="checkbox" class="ch" id="foo-1" /></div>
				     <div class="card-actions">
				        <a href="" class=""><i class="fa fa-pencil"></i></a>
				        <a href="" class="delete_company_project" data-confirm="确定删除?" data-method="delete" rel="nofollow"><i class="fa fa-trash-o"></i></a>
				    </div>
				    <div class="date">2015-1-1</div>
				    <div class="card-inner" data-company-project="f5654450-91b1-11e4-8380-f23c91ae92da">


				    <div class="title-bloc" id="title-bloc">
				        <span>Project IT01</span>
				      </div>
				      
				      <div class="project-details" id="project-details">
				        <div class="desc-bloc dark">
				          工程是科学和数学的某种应用，通过这一应用，使自然界的物质和能源的特性能够通过各种结构、机器、产品、系统和过程，是以最短的时间和精而少的人力做出高效、可靠且对人类有用的东西。将自然科学的理论应用到具体工农业生产部门中形成的各学科的总称。
				        </div>
				      </div>
				      
				    </div>
				  </div>
				<div class="card company-project-card unit-20" data-color="#FFE9E2" style="background-color: #FFE9E2;">
				   <div class="check"><input type="checkbox" class="ch" id="foo-1" /></div>
				    <div class="card-actions">
				        <a href="" class=""><i class="fa fa-pencil"></i></a>
				        <a href="" class="delete_company_project" data-confirm="确定删除?" data-method="delete" rel="nofollow"><i class="fa fa-trash-o"></i></a>
				    </div>
				    <div class="date">2015-1-1</div>
				    <div class="card-inner" data-company-project="f5654450-91b1-11e4-8380-f23c91ae92da">
				     


				    <div class="title-bloc" id="title-bloc">
				        <span>Project IT01</span>
				      </div>
				      
				      <div class="project-details" id="project-details">
				        <div class="desc-bloc dark">
				          工程是科学和数学的某种应用，通过这一应用，使自然界的物质和能源的特性能够通过各种结构、机器、产品、系统和过程，是以最短的时间和精而少的人力做出高效、可靠且对人类有用的东西。将自然科学的理论应用到具体工农业生产部门中形成的各学科的总称。
				        </div>
				      </div>
				      
				    </div>
				  </div>	
				  				  
				</div>
		    </div>
		    
		</div>

	</div>

<script type="text/javascript" src="js/project.js"></script>

<?php

include "includes/footer.php"
?>