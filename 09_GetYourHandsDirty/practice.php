<?php

	// Constants
define('TITLE', 'Arrays');

	// Variables
$my_name ='Hasan Osman';
$lesson_num = 9;

	
	// Arrays
$age_group = array('child', 'teenager', 'adult');

$handlebar = array(
							name => 'handlebar',
								colour => 'black'
						);
							
$fu_manchu = array(
								name => 'Fu Manchu',
									colour => 'brown'
							);
							
$salvador_dali = array(
									name => 'Salvador Dali',
										colour => 'blonde'
								);
								
$gentlemen = array(
							
							array(
										name => 'Hasan',
											country => 'Khartoum'
									),
									
							array(
										name => 'Osman',
											country => 'China'
									),
								
										array(
											name => 'Ibrahim',
												country => 'Sweden'
										)
									);
	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Get Your Hands Dirty: <!-- TITLE --></title>
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
			
			<h1>Get Your Hands Dirty: <small><?php echo TITLE; ?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
				
				<h3><?php echo $gentlemen[0][name]; ?> from <?php echo $gentlemen[0][country]; ?></h3>
				<p><?php echo $gentlemen[0][name]; ?> is a <?php echo $age_group[0]; ?>. He has a wannabe <?php echo $handlebar[name]; ?> moustache and he dyes it the colour <?php echo $handlebar[colour]; ?>. </p>
				
				<h3><?php echo $gentlemen[1][name]; ?> from <?php echo $gentlemen[1][country]; ?></h3>
				<p><?php echo $gentlemen[1][name]; ?> is a <?php echo $age_group[1]; ?>. He has a <?php echo $age_group[1]; ?>'s moustache in the style of <?php echo $fu_manchu[name]; ?>. The colour of his moustache is <?php echo $fu_manchu[colour]; ?>. </p>
				
				<h3><?php echo $gentlemen[2][name]; ?> from <?php echo $gentlemen[2][country]; ?></h3>
				<p><?php echo $gentlemen[2][name]; ?> is an <?php echo $age_group[2]; ?>. He proudly wears his moustache in the style of the famous <?php echo $salvador_dali[name]; ?> and paints it in the colour <?php echo $salvador_dali[colour]; ?>.</p>
				
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the final example</a>
			
			<div class="navs cf">
				<a href="" class="button prev">Previous Lecture</a>
				<a href="" class="button next">Next Lecture</a>
			</div><!-- end navs -->
			
			<hr>
			
			<small>&copy;<?php echo date('Y'); ?> - <?php echo $my_name; ?></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
