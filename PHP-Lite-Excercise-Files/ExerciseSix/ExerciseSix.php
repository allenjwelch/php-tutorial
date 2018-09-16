<!--Exercise Six Solution-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Exercise Six Solution</title>
</head>
<body>

	<?php
		require_once ("ExerciseSixFunction.php");
		// we could have called the function and caught the return
		// value then tested it
		/*
		$return = ValidateUser("sconnor","fatethatwemake");
		if ($return)
		...
		*/
		// there is no reason to create a variable that we only need
		// to control the if

		/*
		include "filename"
		inclde_once "filename"
		require "filename" ---> throws fatal error if file cannot be included
		require_once "filename" ---> throws fatal error if file cannot be included
		*/
		if (ValidateUser("sconnor","fatethatwemake"))
		{
			echo "Welcome<br>";
		}
		else
		{
			echo "Please try again.<br>";
		}

		echo "<br>";
		// network function returns the IP for a host name
		$name = "cnn.com";
		$ipAddr = gethostbyname($name);
		echo "This is the IP address of $name: $ipAddr <br>";

		echo "<br>";
		// network function returns the host name for an IP address
		$name = gethostbyaddr($ipAddr);
		echo "This is the host address of $ipAddr: $name<br>";

		echo "<br>";
		//network function returns the DNS record for a host name
		$dnsRec = dns_get_record($name);
		print_r($dnsRec);

		echo "<br><br>";
		// string function to replace / with ,
		$bmonth = '1';
		$bdate = '1';
		$byear = '1995';

		echo "<br>";
		// Calendar function to lookup day of week for a date
		$bday = juliantojd($bdate, $bmonth, $byear);
		echo "Your birthday $bdate/$bmonth/$byear fell on a " . jddayofweek($bday, 1);


	?>
</body>
</html>
