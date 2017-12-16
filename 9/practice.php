<?php

	// Constants
	define("TITLE","ARRAYS");


	// Variables
$my_name = "Ruby";
$lesson_num = 9;


	// Arrays

$age_group = array("child","teenager","adult");

$handlebar = array(
	name => "handlebar",
	color => "black"
);

$fu_manchu = array(
	name => "fu_manchu",
	color => "brown"
);

$salvador_dali = array(
	name => "salvador_dali",
	color => "blonde"
);

$gentlemen =array(
	array(
		first_name => "Carter",
		country => "Canada"
	),
	array(
		first_name => "Logan",
		country => "Ireland"
	),
	array(
		first_name => "Tedd",
		country => "UK"
	)
);

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Get Your Hands Dirty: <?php echo TITLEL?></title>
		<link href="/assets/styles.css" rel="stylesheet">
		<script type="text/javascript" src="/assets/syntaxhighlighter/scripts/shCore.js"></script>
		<script type="text/javascript" src="/assets/syntaxhighlighter/scripts/shBrushPhp.js"></script>
		<link type="text/css" rel="stylesheet" href="/assets/syntaxhighlighter/styles/shCoreDefault.css"/>
		<script type="text/javascript">SyntaxHighlighter.all();</script>
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="/assets/img/logo.png" alt="PHP">
			</a>

			<h1>Get Your Hands Dirty: <small><?php echo TITLEL ?></small></h1>
			<hr>

			<h2>Your Example</h2>

			<div class="sandbox">

				<h3><?php echo $gentlemen[0][first_name]?> from <?php echo $gentlemen[0][country]?></h3>
				<p><?php $gentlemen[0][first_name];?> is quite of <?php echo $age_group[2]; ?>! He's sports a solid <?php echo $handle[name];?>
				mustache that is <?php echo $handlebar[color];?> in color </p>


				<h3><?php echo $gentlemen[1][first_name]?> from <?php echo $gentlemen[1][country]?></h3>
				<p><?php $gentlemen[1][first_name];?> is quite of <?php echo $age_group[1]; ?>! He's sports a solid <?php echo $fu_manchu[name];?>
				mustache that is <?php echo $fu_manchu[color];?> in color </p>

				<h3><?php echo $gentlemen[2][first_name]?> from <?php echo $gentlemen[2][country]?></h3>
				<p><?php $gentlemen[1][first_name];?> is quite of <?php echo $age_group[0]; ?>! He's sports a solid <?php echo $salvador_dali[name];?>
				mustache that is <?php echo $salvador_dali[color];?> in color </p>

				<h3></h3>
				<p></p>

				<h3></h3>
				<p></p>

			</div><!-- end sandbox -->

			<a href="index.php" class="button">Back to the final example</a>

			<div class="navs cf">
				<a href="" class="button prev">Previous Lecture</a>
				<a href="" class="button next">Next Lecture</a>
			</div><!-- end navs -->

			<hr>

			<small>&copy;<!-- YEAR --> - <!-- YOUR NAME --></small>
		</div><!-- end wrapper -->

		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
