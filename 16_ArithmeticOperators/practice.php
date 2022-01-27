<?php
	
	// Constants
define ('TITLE', 'Arithmetic Operators');
	
	// Custom Variables
$my_name = 'Hasan Osman';
$lesson_num = 16;


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
				
				<h3>Addition<code>+</code></h3>
				<?php
					$a = 5;
					$b = 13;
					$c = ($a + $b);
					
					echo "$a plus $b equals to $c";
				?>
				
				<h3>Subtraction <code>-</code></h3>
				<?php
					$a = 5;
					$b = 13;
					$c = ($a - $b);
					
					echo "$a minus $b equals to $c";
				?>
				
				<h3>Multiplication <code>*</code></h3>
				<?php
					$a = 5;
					$b = 13;
					$c = ($a * $b);
					
					echo "$a multiplied by $b equals to $c";
				?>
				
				<h3>Division <code>/</code></h3>
				<?php
					$a =5;
					$b = 13;
					$c = $a  / $b;
					
					echo "$a divided by $b equals to $c";
				?>
				
				<h3>Modulus <code>%</code></h3>
				<?php
					$a = 5;
					$b = 13;
					$c = $a % $b;
					
					echo "$a % $b equals to $c";
				?>
				
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy;<?php echo date('Y')> - <?php echo $my_name; ?>></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
