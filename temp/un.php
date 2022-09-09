<!doctype html>
<html lang="en">
<head>
  <title> </title>
  <link rel="stylesheet" href="un.css">
</head>
<body>

	<form method="post" action="un.php"> 
	   Population Search:  <br> Upper Bound <input type="text" size="5" name="ub"> 
	   Lower Bound <input type="text" size="5" name="lb"> 
	   <input type="submit" value="submit">
	</form>
<table>
	<tr>
		<th> Name </th>
		<th>Continent</th>
		<th>Population </th>
		<th>Area</th>
    </tr>
<?
$dbc = new mysqli("localhost", "student", "password", "un");
$query = "select * from countries";
$ub =$_POST['ub'];
$lb = $_POST['lb'];

if($lb > 0)
{
    $query = "select * from countries where pop >= $lb";
}

if($ub > 0)
{
    $query = "select * from countries where pop <= $ub";
}
if($lb > 0 and $ub > 0)
{
    $query = "select * from countries where pop >= $lb and pop <= $ub";
}



$result = $dbc->query($query);
while($row = $result->fetch_assoc())
{
    print"<tr>
    <td>$row[name]</td>
    <td>$row[continent]</td>
    <td>$row[pop]</td>
    <td>$row[area]</td>
    </tr>";
}
?>
</table>
</body>
</html>