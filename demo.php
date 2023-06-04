<?php
 if (isset($_POST['done'])) {
  $teacher_id = $_POST['teacher_id'];
  $course_code = $_POST['course_code'];
  $semester = $_POST['semester'];
  $date = $_POST['date'];
  $start_time = $_POST['start_time'];
  $duration = $_POST['duration'];
  

   $Genarator = "ABCDEFGHIJKLMNOPQRSTUVQXYZ1234567890abcdefjhijklmnopqrstuvwxyz";
   echo substr(str_shuffle($Genarator),0,6);
   echo "<p>Your code is: $Genarator</p>";

 }
?>