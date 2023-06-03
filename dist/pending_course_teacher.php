<?php


$con=mysqli_connect("localhost", "root", "", "cusas") or die("connection fail");
   
  

    $sql_query = " select * from course where teacher_id=0";
    $result=mysqli_query($con,$sql_query);
// $sql_query2 = "INSERT INTO `takes` (`course_code`, `teacher_id`) VALUES ('$course_code', ' $teacher_id');";
$result=mysqli_query($con,$sql_query);



echo '
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>View Details</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./style.css">

</head>
<body>


<main>
  <table>
    <thead>
      <tr>
        <th>
          Course Code
        </th>
        <th>
          Course Tittle
        </th>
        <th>Start Time</th>
        <th>Credit</th>
        <th>Semester</th>
        <th>Session</th>
        <th>Teacher ID</th>
      </tr>
    </thead>

  

    <tbody>';
     
    while($row=mysqli_fetch_assoc($result)){
        $course_title=$row["course_title"];
        $course_code=$row["course_code"];
        $semester=$row["semester"];
        $start_date=$row["start_date"];
        $credit=$row["credit"]; 
        $session=$row["session"];
        $teacher_id=$row["teacher_id"];

       echo  '<tr>
        <th>';

       echo $course_code;
    echo '
        </th>
        <th>';

        echo $course_title;

        echo '</th>
        <th>';
        echo $start_date;
       echo ' </th>
        <th>';
        echo $credit;
        echo '</th>
        <th>';
        echo $semester;
        echo '</th>
        <th>';
        echo $session;
        echo '</th>
        <th>';
        echo $teacher_id;
        
        echo '</th>
      </tr>';


    }

   echo ' </tbody>
    </table>
    <div class="detail">
      <div class="detail-container">
  
  
      </div>
      <div class="detail-nav">
        <button class="close">
          Close
        </button>
      </div>
    </div>
  </main>
  <!-- partial -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script><script  src="./script.js"></script>
  
  </body>
  </html>
  ';
  



?>
