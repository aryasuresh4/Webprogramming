<html>
<head>
<title>Factorial program using for loop in php</title>
</head>
<body>
<form method="POST" >
Enter a number:<br>
<input type="number" name="number">
<input type="submit" name="submit">
</form>
<?php
if($_POST){
$fact=1;
$number=$_POST['number'];
echo "factorial of a $number:<br><br>";
for($i=1;$i<= $number;$i++)
{
	$fact=$fact*$i;
}
echo$fact."<br>";
}
?>
</body>
</html>