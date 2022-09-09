<!doctype html>
<html lang="en">
<head>
  <title>  </title>
  <link rel="stylesheet" href=""> 
 
</head>
<body>
<?
  
  class GradeBook
  {
      public $grades;
      public $students;
      
      function display_grades()
      {
          print "<table>
          <th>
          <td>Names</td>
          <td>Grades</td>
          </th>";
          foreach ($this->students as $i=>$student)
          {
              //i need the $i variable to access the same row of the second array.
              
              print"<tr>
              <td>".$this->students[$i]."</td>
              <td>".$this->grades[$i]."</td>
              </tr>";
              
          }//end of the foreach loop
          
          print"</table>";
      }//end of display_grades
      function average()
      {
          foreach($this->grades as $grade)
          {
              $count++;
              $sum += $grade;
          }
          return $sum / $count;
      }
      
 }//end of class
 //-------Main Program------------
$gradebook = new GradeBook();
$gradebook->students = file("student.names.txt");
$gradebook->grades = file("student.grades.txt");

print "The class average is ". number_format($gradebook->average(),2) ."<br />";

$gradebook->display_grades();


?>
</body>
</html>