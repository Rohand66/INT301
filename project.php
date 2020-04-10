//Github link-
/*Problem Statement-You are required to print electricity bill for the number
of unit.Units must be given as an input by the user,it will print 
electricty bill using: 
1.For first 50 units,it will charge Rs9 per unit.
2.For next 50 units,it will charge Rs12 per unit.
3.Above it,it will charge Rs15 per unit.
*/
<!DOCTYPE html>
<head>
<title>Electricity Bill Calculator</title>
<body>
<?php
//Function for Calculation
function bill($units)
{
	$first_fifty=9.0;
	$next_fifty=12.0;
	$above_fifty=15.0;
	$rem_1=50*$first_fifty;
	$rem_2=50*$next_fifty;
	if($units<=50)
	{
		$units=$units*$first_fifty;
		return($units);
	}
	else if($units>50 && $units<=100)
	{
	
		$rem_3=$units-50;
		$units=$rem_1+($rem_3*$next_fifty);
		return($units);
	}
	else if($units>100)
	{
		$rem_4=$units-100;
		$units=$rem_1+$rem_2+($rem_4*$above_fifty);
		return($units);
	}
	else
	{
		echo "<br>!!!Wrong Input!!!!";
	}
	
}
?>
<h1> ELECTRICITY BILL </h1>
<br>
<form action="project.php" method="post">
Enter Units<input type="number" name="units">
<input type="submit" name="sub" value="Click">
<br>
</form>
</body>
</head>
</html>
<?php
$res = '';
if (isset($_POST['sub']) ) {
    $units = $_POST['units'];
    if (!empty($units))
	{
        $res= 'Total amount of units ' . $units . ' = ' ."Rs.". bill($units);
		echo "<br>".$res;
    }
}
?>
