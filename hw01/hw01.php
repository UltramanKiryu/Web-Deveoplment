<!doctype html>
<html lang="en">
<head>
  <title>  </title>
  <link rel="stylesheet" href="hw01.css">
 
  <!-- ----------------------------------
			BIS1523/BIS2523 Documentation
   Name: Andrew Banks
   Netid:alb1424
   Date:1/20/2021
   
   Variables used:
      <variables>  <description of data variable will hold>
      $data: AN array that holds the values of the file novels.txt
      $covers: AN array that holds the values of the file covers.txt
      
  
   -------------------------------------  -->
</head>
<body>
    <?
print"<table>
    <tr>
    <th>Books</th>
     <th>Covers</th> 
    </tr>";

    $data = file("novels.txt");
    $covers = file("covers.txt");
    foreach($data as $i=>$title)
    {
        $fields = explode(" ",$title);
        
        print"<tr>
        <td>$title</td>
        <td><img src=$covers[$i]  height = 100></td>
        </tr>";
    }
    print"</table>";
?>
    
        
</table>
</body>

</html>