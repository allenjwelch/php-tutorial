<?php include "functions.php"; ?>
<?php include "includes/header.php";?>


	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>

		</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">

	<?php
	/*  Step 1 - Create a database in PHPmyadmin
		Step 2 - Create a table like the one from the lecture
		Step 3 - Insert some Data
		Step 4 - Connect to Database and read data
	*/

		$connection = mysqli_connect('localhost', 'root', 'root', 'practice7');
		if(!$connection) {
			die("Database connection failed");
		}

		if(isset($_POST['submit'])) {

			$hero = $_POST['hero'];
			$power = $_POST['power'];

			$query = "INSERT INTO heros(Name, Superpower) ";
			$query .= "VALUES ('$hero', '$power') ";
			$result = mysqli_query($connection, $query);

			if(!$result) {
				die('Query FAILED' . mysqli_error($connection));
			}
		}
	?>

	<h1>Create your Team!</h1>
	<form action="7.php" method="post">
		<input type="text" name="hero" placeholder="Hero">
		<input type="text" name="power" placeholder="Superpower">
		<input type="submit" name="submit" value="GO!">
	</form>





</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>
