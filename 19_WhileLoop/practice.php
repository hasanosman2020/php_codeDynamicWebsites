<?php
	
	// Constants
define ('TITLE', 'While Loop');

	
	// Custom Variables
$my_name = 'Hasan Osman';
$lesson_num = 19;


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
			
			<h1>Tutorial <?php echo $lesson_num; ?>: <small><?php echo TITLE; ?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
				
				<?php
				 
				    // Set a variable with your starting number
						$startingNumber = 10;
						
						//While the variable $startingNumber is less than or equal to 20
						while($startingNumber ≤ 20){
							
						//Echo the variable on the screen and add a breakpoint to go to new line
							echo $startingNumber."</br>";
							
						//Then increment the value by 1;
							$startingNumber++;
						}
				 
				?>
				
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy;<?php echo date('Y')> - <?php echo $my_name; ?></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
