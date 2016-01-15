<?php
require_once 'core/init.php';
include 'includes/header.php';
$now = time();
if($role=='teacher') $user = new Teacher();
else $user = new User();
$data = $user->wareFindByAnd(array('materialsType'),array('like'),array('R'));
?>
<div class="main center">
	<?php
	if($role=='teacher')
	{
	?>
	<span class="new-task"><a href="uploadware.php?type=R"><i class="fa fa-plus"></i> 上传参考文献</a></span>
	<?php
}
	?>

	<div>
		<p>参考文献列表</p>
		<ul>
		<?php
			foreach ($data as $d) {
				?>
			<li><a href="<?php echo $d->linkPDF; ?>"><?php echo $d->title; ?></a></li>
	    <?php
	    	}
	    	?>
	    </ul>
	</div>
</div>
<?php
include "includes/footer.php";
?>