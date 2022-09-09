<!doctype html>
<html lang="en">
<head>
  <title>  </title>
  <link rel="stylesheet" href=""> 
  <!-- ----------------------------------
			BIS1523/BIS2523 Documentation
   Name:
   Netid:
   Date:
   
   Variables used:
      <variable name>  <description of data variable will hold>
  
   -------------------------------------  -->
</head>
<body>
    <form method="post" action ="hw04.php">
           
           <?
       $dbc = new mysqli("localhost", "student", "password", "university");
       
       $query ="select * from courses";
       
       $result=$dbc->query($query);
       while($row = $result->fetch_assoc())
       {
           print"<input type = \"radio\" name =\"course\" value=\"$row[course_id]\">$row[dept] $row[code]<br />";
       }
      ?>
          
          <input type = "submit" name="submit">
      </form>
     
      
 <?
$final=$_POST['submit'];
if(isset($final))
{
$query ="select * from courses_taken
inner join student on taken_student = student_id
where taken_course = $_POST[course]";
$result = $dbc->query($query);
print"<table>
<tr><th>Name</th><th>Grades</th>
</tr>";
while($row = $result->fetch_assoc())
       {
       print"<tr>
       <td>$row[fname] $row[lname]</td>
           <td>$row[grade]</td>
           </tr>";
       }
       print"</table>";
       
}


?> 

</body>
</html>