<!--  <div class="progress progress-global">
 	<div class="progress-bar progress-bar-info progress-bar-striped active" style="width: 50%;">
 		
 	</div>
 </div> -->
 <footer>
	<span>版权所有:北京理工大学软件学院</span>
</footer>   
   
 <script src="bootstrap/js/bootstrap.min.js"></script>  
 <script src="js/global.js"></script>
  <?php
  	$url = $_SERVER['REQUEST_URI'];
	$url = substr($url, strrpos($url,'/')+1);
	$url = substr($url, 0,strrpos($url,'.'));

	$message =  Session::flash("$url");
	if($message!=''){
		?>
	<script type='text/javascript'>

		$('body').showMessage("<?php echo $message?>",3000);
	</script>	

	

	<?php
	}
	?>
   
  </body>
</html>