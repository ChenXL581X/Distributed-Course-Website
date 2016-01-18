<?php 
include "includes/header.php";
?>

<div class="main row">
	<div class="col-md-8 col-md-offset-2">
		<?php 
		$id = Input::get('id');
		$info = new News();
		$data = (array)$info->getInfoByID($id);
// 		print_r($data);
		echo "<div>";
		echo "<h1>".$data['title']."</h1>";
		echo "<p>".$data['context']."</p>";
		echo "<p>".$data['upload_people']."</p>";
		echo "</div>";
		?>
	</div>
</div>

<?php
include "includes/footer.php";
?>
