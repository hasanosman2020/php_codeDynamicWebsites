<?php
	
	// Constants
define('TITLE', 'If, Else and Elseif statements');
	
	
	// Custom Variables
$my_name = 'Hasan Osman';
$lesson_num = 13;

$species = 'human';
$nativeLanguage = 'English';
$yearsOnEarth = 25;
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
			
			<h1>Get Your Hands Dirty: <small><?php echo TITLE; ?>></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			<?php 
			
			if($species == 'Black Rhino'){
				echo "<p>Welcome Black Rhino! You and the other Black Rhinos will love this lake.</p>";
				
			}
			elseif($species == 'human'){
				echo "<p>Welcome Human! Please do not disturb the Black Rhino.</p>";
				
			}
			else{
				echo "<p>Welcome Stranger! Your kind is unknown to us.</p>";
				
			};
			
			?>
			
			<h2>Another Example</h2>
			<?php
			
			if($yearsOnEarth == 20){
				echo "<p>Congratulations, you have made it on this Earth for more than 20 years.</p>";
				
			}
			elseif($yearsOnEarth < 20){
				echo "<p>Hello young one, you have many more years remaining on Earth.</p>";
				
			}
			else{
				echo "<p>You must be more than 20 years old.</p>";
				
			};
			
			?>
			
			<h2>Another Example</h2>
			<?php 
			if($nativeLanguage == 'German'){
				echo "<p>Wilkomemn!</p>";
				
			}
			elseif($species == 'rhino'){
				echo "<p>You must be a rhino.</p>";
				
			}
			else{
				echo "<p>You must be neither a rhino and nor do you speak German.</p>";
				
			}
			
			?>
			<div class="sandbox">
				
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy;<?php echo TITLE; ?> - <?php echo $my_name; ?>></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
