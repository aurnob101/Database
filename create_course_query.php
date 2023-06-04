<<<<<<< HEAD
<?php

if(isset($_POST['submit'])){
    include_once 'connection.php';
    $course_title=$_POST["course_title"];
    $course_code=$_POST["course_code"];
    $semester=$_POST["semester"];
    $start_date=$_POST["start_date"];
    $credit=$_POST["credit"]; 
    $session=$_POST["session"];
  

    $sql_query = "INSERT INTO `course` (`course_code`, `course_title`, `start_date`, `credit`, `semester` , `session`,`teacher_id`)
     VALUES ('$course_code', '$course_title ', '$start_date', '$credit', '$semester' ,'$session','0')";
    $result=mysqli_query($con,$sql_query);
//     $sql_query2 = "INSERT INTO `takes` (`course_code`, `teacher_id`) VALUES ('$course_code', ' $teacher_id');";
//     $result2=mysqli_query($con,$sql_query2);

        // check if the query was successful
    if ($result) {
        echo "Course Create successfully.";
    } else {
        echo "Error Course Create : " . mysqli_error($con);
    }



}





=======
<?php

if(isset($_POST['submit'])){
    include_once 'connection.php';
    $course_title=$_POST["course_title"];
    $course_code=$_POST["course_code"];
    $semester=$_POST["semester"];
    $start_date=$_POST["start_date"];
    $credit=$_POST["credit"]; 
    $session=$_POST["session"];
  

    $sql_query = "INSERT INTO `course` (`course_code`, `course_title`, `start_date`, `credit`, `semester` , `session`,`teacher_id`)
     VALUES ('$course_code', '$course_title ', '$start_date', '$credit', '$semester' ,'$session','0')";
    $result=mysqli_query($con,$sql_query);
//     $sql_query2 = "INSERT INTO `takes` (`course_code`, `teacher_id`) VALUES ('$course_code', ' $teacher_id');";
//     $result2=mysqli_query($con,$sql_query2);

        // check if the query was successful
    if ($result) {
        echo "Course Create successfully.";
    } else {
        echo "Error Course Create : " . mysqli_error($con);
    }



}





>>>>>>> a0dff8a6904b5433bbd40bf12bc1f45fa464a6d8
?>