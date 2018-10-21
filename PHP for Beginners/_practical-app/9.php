<?php include "functions.php"; ?>
<?php include "includes/header.php";?>



	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>


		</aside><!--SIDEBAR-->


			<article class="main-content col-xs-8">



	<?php

	/*
	Create a link saying Click Here, and set the link href to pass some parameters and use the GET super global to see it
	Step 2 - Set a cookie that expires in one week
	Step 3 - Start a session and set it to value, any value you want.
	*/

	if(isset($_GET['message']))
	print_r($_GET);
	$tag = "Booyah!";
	setCookie("EatMyCookie", 'this is my cookie', time() + (60*60*24*7));
	session_start();
	$_SESSION['yup'] = "Hello";

if(isset($_COOKIE['EatMyCookie'])) {
	echo $_COOKIE['EatMyCookie'];
}

if(isset($_SESSION['yup'])) {
	echo $_SESSION['yup'];
}

	?>

	<a href='9.php?message=<?php echo $tag; ?>'>Click Here</a>




</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>
