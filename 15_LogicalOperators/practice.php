<?php
	
	// Constants
define('TITLE', 'Logical Operators');
	
	// Custom Variables
$my_name = 'Hasan Osman';
$lesson_num = 15;

$username = 'Hasan';
$password = 'Osman';

$cartTotal = 15;
$couponCode = 'discountPlease';


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
				
				<h3>And <code>and</code></h3>
				<?php
					if($username === 'Hasan' && $password === 'Osman'){
						echo 'Your login information is correct.';
					}else {
						echo 'You have entered an incorrect username or password.';
					}
				?>
				
				<h3>Or <code>or</code></h3>
				<?php
				if($cartTotal > 15 || $couponCode == 'discountPlease'){
					echo "Your coupon code is \"$"couponCode\" and you qualify for a discount.";
				}else {
					echo "Sorry but your cart total is either less than $cartTotal or your coupon code does not contain the string $discountPlease, so ou do not qualify for a discount."
				}
				?>
				
				<h3>Not <code>!</code></h3>
				<?php
					// your code here
				$own_dog = true;
				
				if($own_dog){
					echo 'You own a dog';
				} else {
					'You do not own a dog.'
				}
				?>
				
				<h3>And <code>&amp;&amp;</code></h3>
				<?php
					// your code here
				?>
				
				<h3>Or <code>||</code></h3>
				<?php
					// your code here
				?>
				
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy;<?php echo date('Y'); ?> - <?php echo TITLE; ?></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
