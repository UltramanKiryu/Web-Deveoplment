<!doctype html>
<html lang="en">
<head>
  <title>  </title>
  <link rel="stylesheet" href="hw03.css"> 
  <!-- ----------------------------------
			BIS1523/BIS2523 Documentation
   Name:Andrew Banks
   Netid:alb1424
   Date:02/16/2021
   
   Variables used:
      <variable name>  <description of data variable will hold>
   -------------------------------------  -->
</head>
<body>
<?
$dbc = new mysqli("localhost", "student", "password", "novels");
$query = "select * from novels";
$result= $dbc->query($query);
print"<table>
<tr>
<th>Book</th>
<th>Cover</th>
</tr>";
while($row = $result->fetch_assoc())
{
    print"<tr>
        <td>$row[title]</td>
        <td><img src=$row[image] height = 100></td>
        </tr>"; 
}
print"</table>";
?>
</body>
</html>