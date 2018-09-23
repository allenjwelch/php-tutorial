<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>


		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">


	<?php


/*
	Step1: Use a pre-built math function here and echo it
	Step 2:  Use a pre-built string function here and echo it
	Step 3:  Use a pre-built Array function here and echo it
*/
	echo rand(1, 10);
	echo "<br>";
	$myString = "This string is not very long";
	echo strlen($myString);
	echo "<br>";
	$myArray = [45, 3, 28, 64, 934, 3546, 25, 123, 74, 234];
	echo "This array is unsorted:";
	print_r($myArray);
	echo "<br>";
	sort($myArray);
	echo "This array is now sorted!:";
	print_r($myArray);
	echo "<br>";
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>
