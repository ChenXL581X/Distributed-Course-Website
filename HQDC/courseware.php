<?php
require_once 'core/init.php';
include 'includes/header.php';
$now = time();
if($role=='teacher') $user = new Teacher();
else $user = new User();
$data = $user->wareFindByAnd(array('materialsType'),array('like'),array('C'));
?>
<div class="main center">
	<?php
	if($role=='teacher')
	{
	?>
	<span class="new-task"><a href="uploadware.php?type=C"><i class="fa fa-plus"></i> 上传课件</a></span>
	<?php
}
	?>
	<div>
		<p>选择学年</p>
		<select>
			<option>2014-2015</option>
			<option>2015-2016</option>
		</select>
	</div>
	<div>
		<p>课件列表</p>
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