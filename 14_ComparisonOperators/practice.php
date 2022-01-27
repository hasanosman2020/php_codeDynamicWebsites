<?php
	
	// Constants
define ('TITLE', 'Comparison Operators');

	
	// Custom Variables

$my_name = 'Hasan Osman';
$lesson_num = 14;

$earthYears = 23.25;
$favouriteStringNumber = '1';
$birth_country = 'Sudan';
$value = 7;

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
				
				<h3>Equal <code>==</code></h3>
				<?php
					// your code here
				if($earthYears == 23.25){
					echo "<p>You are $earthYears years old.</p>";
				}
				?>
				
				<h3>Identical <code>===</code></h3>
				<?php
					// your code here
				if($favouriteStringNumber === 1){
					echo "<p>Your favourite number is the integer 1.</p>";
				}elseif($favouriteStringNumber === '1'){
					echo "<p>Your favourite number is the string '1'.</p>";
				}else{
					"<p>You must have a favourite number other than the integer 1 or the string 1.</p>";
				}
				?>
				
				<h3>Not Equal <code>!=</code></h3>
				<?php
					// your code here
				if($birth_country != 'England'){
					echo "<p>Hello, you must come from $birth_country.</p>";
				}
				
				?>
				
				<h3>Not Identical <code>!==</code></h3>
				<?php
					// your code here
				if($earthYears !== 23.25){
					echo "<p>You are not exactly the string \"$earthYears\".</p>";
				} else {
					echo "<p>You are exactly the string \"$earthYears\".</p>";
				}
				?>
				
				<h3>Less Than <code>&lt;</code></h3>
				<?php
					// your code here
				if($lesson_num < 15){
					echo "<p>You must not yet have reached lesson number 15.</p>";
				}
				?>
				
				<h3>Greater Than <code>&gt;</code></h3>
				<?php
					// your code here
				if($lesson_num > 12){
					echo 'You are in between lesson 13 and lewsson 15.';
				}
				?>
				
				<h3>Less Than or Equal To <code>&lt;=</code></h3>
				<?php
					// your code here
				if($value ≤ 14){
					echo "$value is equal to $value";
				}
				?>
				
				<h3>Greater Than or Equal To <code>&gt;=</code></h3>
				<?php
					// your code here
				if($value ≥ 9){
					php echo 'The value is certainly less than 9.';
				}
				?>
				
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy;<?php echo TITLE; ?> - <?php echo $your_name; ?></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
