<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    include_once 'connection.php';
    $teacher_id=$_SESSION["user_id"];
    $course_code=$_POST["course_code"];
    $semester=$_POST["semester"];
    $date=$_POST["date"];
    $start_time=$_POST["start_time"];
    $duration=$_POST["duration"];
    $session=$_POST["session"];

    // Generate a 6-character random code
    $code = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghijklmnopqrstuvwxyz'), 0, 6);

    // Insert the session into the table with the generated code
    $sql_query = "INSERT INTO `sessions`(`teacher_id`, `course_code`, `semester`, `session` ,`date`, `start_time`, `duration`, `code`) 
    VALUES ('$teacher_id', '$course_code', '$semester', '$session' , '$date', '$start_time', '$duration', '$code')";
    $result=mysqli_query($con,$sql_query);

    $sql_query3 = "select * from sessions where code= '$code'";
    $result3=mysqli_query($con,$sql_query3);
    $row3=mysqli_fetch_assoc($result3);
    $session_id=$row3['session_id'];

    $sql_query2 = "select * from user where semester= '$semester'";
    $result2=mysqli_query($con,$sql_query2);

    while($row2=mysqli_fetch_assoc($result2)){
        $st_id=$row2['user_id'];
        $date = date('Y-m-d H:i:s');
        $sql_query2 = "INSERT INTO `attendance`(`student_id`, `course_code`, `session_id`, `time`, `status`) 
                      VALUES ('$st_id', '$course_code', '$session_id', '$date','A')";
        $result=mysqli_query($con,$sql_query2);

    }

   

    if($result){
        $sql_query2="select * from sessions where code='$code'";
        $result2=mysqli_query($con,$sql_query2);
        $row2=mysqli_fetch_assoc($result2);
        $session_id=$row2['session_id'];
        
        echo "Session created successfully with code: $code <br>";
         echo "Session id is: $session_id <br>";
         echo "Course Code: $course_code<br>";
    } else {
        echo "Error creating session: " . mysqli_error($con);
    }
    


}




?>

