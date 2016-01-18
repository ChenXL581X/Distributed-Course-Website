<?php 
include "includes/header.php";
$news = new News();
$newsId = Input::get("id");

$news = $news->find($newsId);
?>

<div class="main row">
	<div class="col-md-8 col-md-offset-2">
		<h4><?php echo $news->title;?></h4>	
		<div><?php echo $news->context;?></div>	
	</div>
</div>

<?php
include "includes/footer.php";
?>
