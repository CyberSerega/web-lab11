<!DOCTYPE html>
<html>
<head>
<title>задача14</title>
<meta charset="utf-8">
</head>
<body>
<?php
	$num = 12345;
	$sum = 0;
    while($num!=0)
	{
		$sum+=$num%10;
		$num = $num/10;
	}	
	echo "Сумма цифр числа 12345 равна $sum";
?>

</body>
</html>