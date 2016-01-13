<?php
require_once 'core/init.php';
include 'includes/header.php';
$now = time();
$user = new Teacher();
if($user->data()->id) 
{
	$data = $user->wareFindByAnd(array('materialsType'),array('like'),array('C'));
?>
<div class="main center">
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
<?php } ?>
<?php
include "includes/footer.php";
?>