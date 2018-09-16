<!--Exercise Three Solution-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Exercise Three Solution</title>
</head>
<body>

	<?php

		/*
			- echo and print do the same thing
			- however, print is a () and can only take one parameter but can these can be concatenated using '.'
			- ex: print"this"."is"."a"."single"."print"."statement";
			- print also returns a value

			- single quotes vs double quotes
			- '' will not interpret the value of vars enclosed within them
			- "" will interpret the value of vars and special characters
		*/

		$myVar = "PHP";
		echo 'I am learning $myVar.';
		echo '<br>';
		echo "I am learning $myVar.";
		echo '<br>';

		$UserName = "kirk";
		$Password = "primedirective";

		$testuser = "picard";
		$testpassword = "makeitso";

		if ($testuser == $UserName && $testpassword == $Password)
		{
			echo "Live long and prosper!<br>";
		}
		else
		{
			echo "Please try again<br>";
		}

		// or

		if ($testuser == $UserName)
		{
			if ($testpassword == $Password)
			{
				echo "Live long and prosper!<br>";
			}
			else
			{
				echo "Please try again<br>";
			}
		}
		else
		{
			echo "Please try again<br>";
		}



		?>

</body>
</html>
