<?php

$name = "GoFuckYourself";
$value = "this is a cookie";
// $expiration = time() + (60*60*24*7);
$expiration = time() + (60*60*24*365*10);
setcookie($name,$value,$expiration);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php

if(isset($_COOKIE["GoFuckYourself"])) {

	$someOne = $_COOKIE["GoFuckYourself"];

	echo $someOne;

} else {

	$someOne = "";

}



?>


</body>
</html>
