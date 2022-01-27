<?php

// Constants
define("TITLE", "For Loop");
//for loops are used for when we know the number of times that the loop needs to repeat

// Custom Variables
$myName	= "Hasan Osman";
$lessonNum	= 20;

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

		<h1>Tutorial <?php echo $lessonNum; ?>: <small><?php echo TITLE; ?></small></h1>
		<hr>

		<h2>Your Example</h2>

		<div class="sandbox">

			<?php
			//syntax for a for loop is:
			//for(initialise counter; test if true; increment counter){
			//execute code;
			// }

			/*Essentally the for loop will do the following:
				1. initialise where the loop willl start counting by adding a value to a variable;
				2. evaluate a certain condition to test if that condition is either true or false and if false then the loop will stop running;
				3. increment the value by 1 each tme a loop occurs
				*/

			for ($a = 0; $a < 20; $a++) {
				echo "This is number $a  < /br>";
			}



			?>

		</div><!-- end sandbox -->

		<a href="index.php" class="button">Back to the lecture</a>

		<hr>

		<small>&copy;<?php echo date('Y'); ?> - <?php echo $myName; ?></small>
	</div><!-- end wrapper -->

	<div class="copyright-info">
		<?php include('../assets/includes/copyright.php'); ?>
	</div><!-- end copyright-info -->
</body>

</html>