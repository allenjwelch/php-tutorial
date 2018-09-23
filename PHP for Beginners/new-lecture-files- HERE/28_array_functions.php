<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php

// www.php.net/manual/en/ref.array.php
$list = [343,34,323,23,54,232,453];

echo max($list); // finds largest integer in array

echo "<br>";

echo min($list); // finds smallest integer in array


echo "<br>";

sort($list); // sorts array from small to large

print_r($list);


?>

</body>
</html>
