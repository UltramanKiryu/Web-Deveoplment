<!doctype html>
<html lang="en">
<head>
  <title> </title>
  <link rel="stylesheet" href="nesting.css">
</head>
<body>
<table>

	<tr>
		<th> Student Name </th>
		<th> Department </th>
		<th> Semesters Enrolled </th>
    </tr
    <?
    /*when the program to see what wrong in the program
if(!result){
   print"Error: ".$dbc->error;
   exit;
}*/
    $dbc = new mysqli("localhost","student","password","university"); 
    // Program to print every student name, their department name, and the semesters they have grades
$query = "select* from student
inner join department on major=dept_code";

	// open connection to database
$result =$dbc->query($query);
	// Query the database
while($row = $result->fetch_assoc())
{
    print"<tr>
    <td>$row[fname] $row[lname]</td>
    <td>$row[name]</td>
    <td>";
    //query to get semesters for student
    $sem_query = "select distinct semester from courses_taken
    where taken_student = $row[student_id]";
    $sem_result = $dbc->query($sem_query);
    while($sem_row =$sem_result->fetch_assoc())
    {
        print"$sem_row[semester] <br />";
    }
    print"</td>
    </tr>";
}
	// loop through all the rows one at a time and print them out


?>

</body>
</html>