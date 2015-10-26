<?php
include "includes/header.php"
?>
<link rel="stylesheet" type="text/css" href="css/projects.css">

<div id="main">
	<div class="logo">
		<i class="fa fa-th"></i>
		<h4>以下是本企业所有项目</h4>
		<p>您是超级管理员账户，拥有<b>新建</b>，<b>删除</b>，等所有权利,<a href="#">点此</a>了解账户权限</p>
		<a href="newProject.php" class="btn btn-blue">新建项目</a><a class="btn">新建项目组</a>
	</div>
	
	<div class="probox width-70">
		<div class="toolbar width-70 units-row">
			
			<!-- <div class="check-all width-20">
				<input type="checkbox" data-tools="check-all" data-classname="ch" data-parent="li" id="ch-all" />

				<label  for="ch-all"><i id="check-fa" class="fa fa-square-o" ></i>全选</label>
			</div> -->
			<input type="text" class="input-search unit-60" placeholder="Search">
			<button style="float:left;" class="btn btn-blue unit-20">删除选中</button>
		</div>
		<table class="table width-80 tablebox">
			<thead>
				<tr>
					<th ><input type="checkbox" data-tools="check-all" data-classname="ch" data-parent="li" id="ch-all" />

				<label  for="ch-all">全选</label></th>

					<th >First Name</th>
					<th >Last Name</th>
					<th >Points</th>
					

				</tr>
			</thead>
			<tbody>
				<tr>
					<td><input type="checkbox" class="ch" id="ch-1" /> <label for="ch-1"></label></td>
					<td >Jill</td>
					<td >Smith</td>
					<td >50</td>
					<td class="trash"><a href="#"><i class="fa fa-trash-o"></i></a></td>


				
				</tr>
				<tr class="toggle-tr">

				
 					 <td colspan="5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				    </td>
						
					
				</tr> 
 				
				<tr>
					<td><input type="checkbox" class="ch" id="ch-2" /> <label for="ch-2"></label></td>

					<td>Eve</td>
					<td>Jackson</td>
					<td>94</td>
				</tr>

				<tr>
					<td><input type="checkbox" class="ch" id="ch-3" /> <label for="ch-3"></label></td>

					<td>Eve</td>
					<td>Jackson</td>
					<td>94</td>
				</tr>
				<tr>
					<td><input type="checkbox" class="ch" id="ch-4" /> <label for="ch-4"></label></td>

					<td>Eve</td>
					<td>Jackson</td>
					<td>94</td>
				</tr>
				<tr>
					<td><input type="checkbox" class="ch" id="ch-5" /> <label for="ch-5"></label></td>

					<td>Eve</td>
					<td>Jackson</td>
					<td>94</td>
				</tr>
				<tr>
					<td><input type="checkbox" class="ch" id="ch-6" /> <label for="ch-6"></label></td>

					<td>Eve</td>
					<td>Jackson</td>
					<td>94</td>
				</tr>
								
			</tbody>
		</table>
		
	</div>
</div>
<!-- <div class="messagebox">
	<div class="modalbox">
		<div class="modal-header">
			modal header
		</div>
		<div class="modal-message">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</div>
		<div class="modal-footer">
			<button class='btn'>取消</button>
			<button class='btn btn-blue'>保存</button>
		</div>
	</div>
</div> -->
<script src="js/jquery.easing.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/modal.js"></script>
<script type="text/javascript" src="js/projects.js"></script>

<?php
include "includes/footer.php"
?>
