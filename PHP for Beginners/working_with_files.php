<?php

$file = "example.txt";
// $fileDelete = "deleteMe.txt";
// http://php.net/manual/en/function.fopen.php

$handle = fopen($file, "w");
// $handle = fopen($fileDelete, "w");

if($handle = fopen($file, 'w')) {
	fwrite($handle, 'Learning PHP is taking forever...');
	fclose($handle);
} else {
	echo "The application was not able to write on the file";
}

$handle = fopen($file, "r");

if($handle = fopen($file, 'r')) {
	// $content = fread($handle, 15); //each bite equals 1 character
	$content = fread($handle, filesize($file)); // function for getting entire file size
	echo $content;
	fclose($handle);
} else {
	echo "The application was not able to read the file";
}

unlink("deleteMe.txt");


?>
