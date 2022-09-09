<!doctype html>
<html lang="en">
<head>
  <title>Lecture 7 - Simple XML Example</title>
  <link rel="stylesheet" href="lec7.css">
</head>
<body>
<form name="cont" method=post action="lec7.php">
	<input type="radio" name="cont" value="Africa"> Africa </input> <br />
	<input type="radio" name="cont" value="Australia/Oceania"> Australia/Oceania </input><br />
	<input type="radio" name="cont" value="Europe"> Europe</input><br />
	<input type="radio" name="cont" value="North America"> North America </input><br />
	<input type="radio" name="cont" value="South America"> South America</input>   <br />
	<button id="Button">Search</button>

</form>
<div id="outarea"> 
<?php

   print "<table>
             <tr>
                 <th>Name</th>
                 <th>Pop</th>
                 <th>Area</th>
             </tr>"; 
	$xml= simplexml_load_file("un.xml");
	/* the code print out the sturcture of the file
	print"<pre>";
	print_r($xml);
	print"</pre>";
	*/
	foreach($xml->country as $country_object)
	{
	    if($country_object->continent == $_POST['cont'])
	    {
	        print "<tr>
	    <td>$country_object->name </td>
	    <td>$country_object->pop</td>
	    <td>$country_object->area</td>
	    </tr>";
	    $total_pop+=$country_object->pop;
	    $total_area +=$country_object->area;
	    }
	    
	    
	}
	
  print"</table> <br />";
  print "Total popultaition: $total_pop <br />
        ToTal Area :$total_area";
    	
   
?>
</div>
</body>
</html>