<?php


$xvalue = $_POST['xvalue'];
$yvalue = $_POST['yvalue'];

switch ($_POST) {
	case isset($_POST['soma']):
		print "O resultado da soma é " . ($xvalue + $yvalue);
		break;
	case isset($_POST['sub']):
		print "O resultado é " . ($xvalue - $yvalue);
		break;
	case isset($_POST['mult']):
		print "O resultado é " . ($xvalue * $yvalue);
		break;
	case isset($_POST['div']):
		if($xvalue AND $yvalue !== 0) {
			print "O resultado é " . ($xvalue / $yvalue);
		}
		die("Impossível dividir por zero");
		break;
}


?>

<html>
<head>
	<title>Us the bind</title>
</head>
<body>	
	<form action="soma.php" method="post"> 
		<input name="xvalue" placeholder="first number">
		<input name="yvalue" placeholder="second number">
		
		<input type="submit" name="soma" value="Somar">
		<input type="submit" name="sub" value="Subtrair">
		<input type="submit" name="mult" value="Multiplicar">
		<input type="submit" name="div" value="Dividir">
	<form/>
</body>
</html>
