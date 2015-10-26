<?php
require_once 'core/init.php';

include "includes/header.php";

?>
<link rel="stylesheet" type="text/css" href="css/index.css">

	<div id="main">

		<div class="center">
			<h4>企业智能决策系统</h4>
			<p>深入分析，智能决策</p>
			<div class="units-row">
				<div class="unit-30">
					<i class="fa fa-file-text-o"></i>
					<h5>项目</h5>
					<p>管理或新建项目</p>
				</div>
				<div class="unit-30">
					<i class="fa fa-file-text-o"></i>
					<h5>优化</h5>
					<p>项目优化方式</p></div>
				<div class="unit-30">
					<i class="fa fa-file-text-o"></i>
					<h5>报表</h5>
					<p>企业项目分析</p>
				</div>
			</div>
		</div>
	</div>
	<?php
	$messageName = 'home'; 
	$session = Session::flash('home');
    

	if($session!=''){
		
	?>
	<script type='text/javascript'>
	var newmessage;
	newmessage = $('<div />',{
		id: '<?php echo $messageName;?>',
		class: 'tools-message tools-message-blue',
		html: "<?php echo $session;?>"
				});
	$('body').prepend(newmessage);
	newmessage.message();
	//$('#message-log').message();
	</script>
	<?php
	}
	?>
	<?php
	include "includes/footer.php";
	?>