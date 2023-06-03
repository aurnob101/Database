<?php 

require (__DIR__ . '/dompdf/vendor/autoload.php');
use Dompdf\Dompdf;
use Dompdf\Options;

$options=new Options;
$options->setChroot(__DIR__);

$dompdf= new Dompdf($options);

$dompdf->setPaper("A4","landscape");


$course_code=$_GET['course_code'];
$t_name=$_GET['t_name'];
$con=mysqli_connect("localhost", "root", "", "cusas") or die("connection fail");
   
  

    $sql_query = " select * from course where course_code='$course_code'";
    $result=mysqli_query($con,$sql_query);
    $row=mysqli_fetch_assoc($result);
    $course_title=$row["course_title"];
        $course_code=$row["course_code"];
        $semester=$row["semester"];
        $start_date=$row["start_date"];
        $credit=$row["credit"]; 
        $session=$row["session"];
        $teacher_id=$row["teacher_id"];


        $sql_query4 = "SELECT * FROM `sessions` WHERE teacher_id='$teacher_id' AND course_code='$course_code' AND session='$session'";
        $result4=mysqli_query($con,$sql_query4);
        $total_class=mysqli_num_rows($result4);
        
        



$html_file='
<!DOCTYPE html>
<html>
<head>
 <title>Courses</title>
</head><p style="text-align: center;"><strong>University of Chittagong</strong></p>
<p style="text-align: center;">Department of Computer Science and Engineering</p>
<p style="text-align: center;">Semester: {{sem}}</p>
<p style="text-align: center;">Session: {{session}}</p>
<p style="text-align: center;">Course Code: {{cc}}</p>
<p style="text-align: center;">Course Teacher: {{ct}}</p>
';

$html_file= str_replace("{{ct}}",$t_name,$html_file);
$html_file= str_replace("{{cc}}",$course_code,$html_file);
$html_file= str_replace("{{sem}}",$semester,$html_file);
$html_file= str_replace("{{session}}",$session,$html_file);

$html_file.='<table>
<tr>
<th>Roll No</th>
<th>Name</th>
';
while($row4=mysqli_fetch_assoc($result4)){
    $date=$row4['date'];
   
    $html_file.='
    <th>{{date}}</th>
    
';
$html_file= str_replace("{{date}}",$date,$html_file);
   
   }

   $sql_query2 = "SELECT * FROM `student` WHERE semester='$semester' AND session='$session'";
     $result2=mysqli_query($con,$sql_query2);

while($row2=mysqli_fetch_assoc($result2)){
    $st_id=$row2['student_id'];
    $sql_query3 = "SELECT * FROM `user` WHERE user_id='$st_id'";
       
    $result3=mysqli_query($con,$sql_query3);
    $row3=mysqli_fetch_assoc($result3);
    $st_name=$row3['user_name'];
    $html_file.='
    <tr>
    <td>{{id}}</td>
    <td>{{name}}</td>   
';

$html_file= str_replace("{{id}}",$st_id,$html_file);
$html_file= str_replace("{{name}}",$st_name,$html_file);

$sql_query5 = "SELECT * FROM `sessions` WHERE teacher_id='$teacher_id' AND course_code='$course_code' AND session='$session'";
$result5=mysqli_query($con,$sql_query5);

while($row5=mysqli_fetch_assoc($result5)){
    $session_id=$row5['session_id'];
    
     $st_id=$row2['student_id'];
      $sql_query6 = "SELECT * FROM `attendance` WHERE student_id='$st_id' AND course_code='$course_code' AND session_id='$session_id'";
        $result6=mysqli_query($con,$sql_query6);
        $row6=mysqli_fetch_assoc($result6);
        if($row6!=NULL){
            $att=$row6['status'];
        }
        else $att='-';
        
    $html_file.='
    <td>{{attendance}}</td>
    
';
$html_file= str_replace("{{attendance}}",$att,$html_file);
   
   }
   
   }


   


$html_file.='</body>
</html>';


    $dompdf->loadHtml($html_file);
$dompdf->render();
$dompdf->stream("attendance.pdf",["Attachment" =>0]); 



?>