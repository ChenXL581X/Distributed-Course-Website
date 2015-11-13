<?php
include 'includes/header.php';
?>
<link rel="stylesheet" type="text/css" href="css/calendar.css">
<link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="css/calendar.css" />
		<link rel="stylesheet" type="text/css" href="css/custom_1.css" />
		<script src="js/calendar/modernizr.custom.63321.js"></script>

	<div class="container">	
			
			<div class="custom-calendar-wrap custom-calendar-full">
				<div class="custom-header clearfix">
					<h2>Flexible Calendar <span></h2>
					<h3 class="custom-month-year">
						<span id="custom-month" class="custom-month"></span>
						<span id="custom-year" class="custom-year"></span>
						<nav>
							<span id="custom-prev" class="custom-prev"></span>
							<span id="custom-next" class="custom-next"></span>
							<span id="custom-current" class="custom-current" title="Got to current date"></span>
						</nav>
					</h3>
				</div>
				<div id="calendar" class="fc-calendar-container"></div>
			</div>
		</div><!-- /container -->

<script type="text/javascript" src="js/calendar.js"></script>
<script type="text/javascript" src="js/calendar/jquery.calendario.js"></script>
		<script type="text/javascript" src="js/calendar/data.js"></script>
<?php
include "includes/footer.php";
?>