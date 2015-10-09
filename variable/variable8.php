<!DOCTYPE html>
<html>
<head>
	<title>variable1</title>
</head>
<body>
<?php 
define('TITLE', 'PHP Tutorial');
echo TITLE;
define('TITLE', 'JAVA Turorial');
echo TITLE; //It will give error: Constant TITLE already defined ...
 ?>
</body>
</html>
