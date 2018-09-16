<!--Exercise Five Solution-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Exercise Five Solution</title>
</head>
<body>

	<?php

		/*
			3 types of arrays in PHP:
				- indexed array - numerically indexed (begins at 0)
				- associative arrays - dictionary data structure
				- multi-dimensional arrays - array of arrays
			array(), NOT array []
		*/
		$usernames = array("zsmith" =>"devious","rtam"=>"simon","q" => "continuum","kirk" => "primedirective","sconnor" => "fatethatwemake");
		// example of an associative array

		$testuser = "sconnor";
		$testpassword = "fatethatwemake";

		foreach ($usernames as $user => $password)
		{
			if ($user == $testuser)
			{
				if ($password == $testpassword)
				{
					echo "Welcome<br>";
					print_r($usernames);
				}
				else
				{
					echo "Please try again<br>";
				}
			}

		}


	?>

</body>
</html>
