<!doctype html>
<META HTTPEQUIV="CACHECONTROL" CONTENT="NOCACHE">
<meta httpequiv="expires" content="0" />
<html lang="en">
<head>
  <title> </title>
  <link rel="stylesheet" href="lecture3.css">
</head>
<body>
<section id="input_area">

	<form action="lecture3.php" method="post">
		Enter in a range of populations to search for: 
<?
		print "
		<p> Minimum Population: <input type=\"text\" name=\"min\" size=\"10\" value=\"$_POST[min]\" /> </p>
		<p> Maximum Population: <input type=\"text\" name=\"max\" size=\"10\" value=\"$_POST[max]\" /> </p>
		";
?>		
		<input type="submit" value="Submit" />
	</form>

</section>

<section id="output_area">

<? 
  //read user input
  $min = $_POST['min'];
  $max =$_POST['max'];
  // load  the file
  $data = file("countries.csv");
  print"<table>
  <tr>
  <th>Name</th>
  <th>Popultaions</th>
  </tr>";
  
  // loop through it and print only contries in range
  foreach ($data as $record)
  {
      $fields = explode(",",$record);
      if($fields[1] > $min and $fields[1] < $max)
      {
      print"<tr>
      <td>$fields[0]</td>
      <td>".number_format($fields[1],2)."</td>
      </tr>";    
      }
      
  }
  print"</table>";
?>

</section>

</body>
</html>