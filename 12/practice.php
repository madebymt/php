<?php

	// Constants
define ("TITLE","IF ELSE");

	// Custom Variables
	$my_name = "GREAT";
	$lesson_num = 12;


?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP <?php echo TITLE; ?></title>
		<link href="../assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="../assets/img/logo.png" alt="PHP">
			</a>

			<h1>Tutorial <?php $lesson_num; ?>: <small><?php echo TITLE; ?></small></h1>
			<hr>

			<h2>Your Example</h2>


			<div class="sandbox">
				<?php
				$nav_language = "French";
				if($nav_language == "English"){
					echo "Learn Chinese";
				} elseif ($nav_language == "Chinese"){
					echo "welcome to the team";
				} elseif ($nav_language == "French"){
					echo "Cool to know";
				} else {
					echo "Yes let talk";
				}

				 ?>

			</div><!-- end sandbox -->

			<a href="index.php" class="button">Back to the lecture</a>

			<hr>

			<small>&copy;<?php echo date("Y"); ?> - <?php echo $my_name;?></small>
		</div><!-- end wrapper -->

		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
