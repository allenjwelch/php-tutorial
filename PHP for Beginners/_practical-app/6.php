
<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>


		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	<form action="6.php" method="post">
		<input type="text" name="name" placeholder="Enter your name">
		<input type="submit" name="submit" value="Click!">
	</form>

	<?php

		/*  Step1: Make a form that submits one value to POST super global  */

		if(isset($_POST['submit'])) {
			$name = ($_POST['name']);
			echo "Hello " . $name. "!";
		}

	?>


</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>
