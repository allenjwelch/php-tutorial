<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>


		</aside><!--SIDEBAR-->



	<article class="main-content col-xs-8">


	<?php

	/*
		Step 1 -Make a variable with some text as value
		Step 2 - Use crypt() function to encrypt it
		Step 3 - Assign the crypt result to a variable
		Step 4 - echo the variable
	*/

	$someText = "thisisjustsometext";
	$hashFormat = "$2y$10$";
	$salt = "iusesomecrazystrings22";
	$hashF_and_salt = $hashFormat . $salt;
	$someText = crypt($password,$hashF_and_salt);

	echo $someText;

	?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>
