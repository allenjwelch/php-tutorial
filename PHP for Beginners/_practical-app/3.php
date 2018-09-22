<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>

	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php

	/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP
		Step 2: Make a forloop  that displays 10 numbers
		Step 3 : Make a switch Statement that test againts one condition with 5 cases
	*/

	$string = "Yeah!";
	if($string == "Nope") {
		echo "I hate PHP". "<br>";
	} elseif($string == "Nah"){
		echo "I'm ok with PHP". "<br>";
	} else {
		echo "I love PHP". "<br>";
	};

	for ($i = 1; $i <= 10; $i++) {
		echo $i . "<br>";
	}

	switch($string) {
		case "Nope":
		echo "I hate PHP". "<br>";
		break;
		case "Nah":
		echo "I'm ok with PHP". "<br>";
		break;
		case "Yeah!":
		echo "I love PHP more!". "<br>";
		break;
		default :
    	echo "we could not find anything". "<br>";
    	break;
	}
?>






</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>
