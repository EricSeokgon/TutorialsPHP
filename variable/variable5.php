<!DOCTYPE html>
<html>
<head>
	<title>variable1</title>
</head>
<body>
<?php 
$a = 100;
echo gettype($a);
settype($a,'double');
echo '<br>';
echo gettype($a);
 ?>
</body>
</html>