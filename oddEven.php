<html>
<body>
<form method="get" >
Enter a number:
<input type="number" name="number">
<input type="submit" name="submit">
</form>
</body>
</html>
<?php
if($_GET)
{
$number=$_GET['number'];
if($number%2==0)
{
	echo "$number even number";
}
else
{
	echo "$number odd number";
}
}
?>

