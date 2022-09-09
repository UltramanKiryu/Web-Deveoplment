<!doctype html>
<html lang="en">
<head>
  <title> </title>
  <link rel="stylesheet" href="university.css">
</head>
<body>
<table>

<form action="university.php" method="post">
     Course Number: <input type="text" name="course_id"> <br />
	 <input type="submit" name="submit" value="Search">
	 
</form>


	<tr>
		<th> Student Name </th>
		<th> Department </th>
		<th> Semester </th>
    </tr>
<?

    // Program to print every student name, their department name, that failed a course
    
    $course_search =$_POST['course_id'];
    
    $dbc = new mysqli("localhost","student","password","university");

        $query ="select *
        from student
        inner join department on major = dept_code
        inner join courses_taken on student_id = taken_student
    where grade = 'F'and $course_search = taken_course";
    
    $result =$dbc->query($query);
    while($row = $result->fetch_assoc())
    {
        print"<tr>
        <td>$row[fname] $row[lname]</td>
        <td>$row[name]</td>
        <td>$row[grade] $row[semester]</td>
        </tr>";
        
    }
        
    
	
?>
</body>
</html>