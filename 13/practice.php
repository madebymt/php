<?php

	// Constants
	define("TITLE","FINISH 13 LESSON");

	// Custom Variables
	$my_name = "Ruby";
	$lesson_num = "13";

	$species = "bear";
  $navLanguage = "English";
  $yearOnEarth = 28;

?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP <?php echo TITLE;?></title>
		<link href="../assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="../assets/img/logo.png" alt="PHP">
			</a>

			<h1>Get Your Hands Dirty: <small><?php echo TITLE;?></small></h1>
			<hr>

			<h2>Your Example</h2>

			<div class="sandbox">
				<?php

					 if($species == "Human") {
						 echo "<p>You are a human</p>";
					 } elseif ($species == "bear"){
						 echo "<h2> welcome to bear land</h2>";
					 } else {
						 echo "<p>I don't know you</p>";
					 }
				 ?>

				 <h4>Other example</h4>
				 <?php
				 if ($navLanguage == "English"){
					 echo "<h2>Cool! I want to learn that!</h2>";
				 } else {
					 echo "<h2>but I know other language!</h2>";
				 }

				  ?>

			</div><!-- end sandbox -->

			<a href="index.php" class="button">Back to the lecture</a>

			<hr>

			<small>&copy;<?php echo date("Y"); ?> - <?php echo $my_name?></small>
		</div><!-- end wrapper -->

		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
