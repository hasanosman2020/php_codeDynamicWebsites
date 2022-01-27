<?php
	
	// Constants
define ('TITLE', 'String Operators');
	
	// Custom Variables
$my_name = 'Hasan Osman';
$lesson_num = 17;


?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP <?php echo TITLE? ;></title>
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
				
				<h3>Concatenation Operator <code>.</code></h3>
				<?php
					$a = 'Hello ';
					$b = "my friends."
					$c = $a.$b;
					
					echo $c;
				?>
				
				<h3>Concatenating Assignment Operator <code>.=</code></h3>
				<?php
					$a = 'Hello ';
					$a .= 'my friends';
					echo $a;
					
					$a = 'Hello ';
					echo $a.= 'my friends.';
				?>
				
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy;<?php echo date ('Y'); ?> - <? php echo $my_name; ?></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
